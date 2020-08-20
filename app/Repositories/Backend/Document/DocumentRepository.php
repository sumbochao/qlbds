<?php

namespace App\Repositories\Backend\Document;

use DB;
use Carbon\Carbon;
use App\Models\Document\Document;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
/**
 * Class DocumentRepository.
 */
class DocumentRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Document::class;
    protected $upload_path;
    protected $storage;

    public function __construct()
    {
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'link_document'.DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }
    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.documents.table').'.id',
                config('module.documents.table').'.name',
                config('module.documents.table').'.link_document',
                config('module.documents.table').'.created_at',
                config('module.documents.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        DB::transaction(function () use ($input) {
            $input = $this->uploadImage($input);
            if (Document::create($input)) {
                return true;
            }
            throw new GeneralException(trans('exceptions.backend.documents.create_error'));
        });
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Document $document
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Document $document, array $input)
    {
        // Uploading file
        if (array_key_exists('link_document', $input)) {
            $this->deleteOldFile($document);
            $input = $this->uploadImage($input);
        }

        DB::transaction(function () use ($document, $input) {
            if ($document->update($input)) {
                return true;
            }

            throw new GeneralException(trans('exceptions.backend.documents.update_error'));
        });
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Document $document
     * @throws GeneralException
     * @return bool
     */
    public function delete(Document $document)
    {
        if ($document->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.documents.delete_error'));
    }

    /**
     * Upload Image.
     *
     * @param array $input
     *
     * @return array $input
     */
    public function uploadImage($input)
    {
        $avatar = $input['link_document'];

        if (isset($input['link_document']) && !empty($input['link_document'])) {
            $fileName = time().'_'.$avatar->getClientOriginalName();

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            $input = array_merge($input, ['link_document' => $fileName]);

            return $input;
        }



    }

    /**
     * Destroy Old Image.
     *
     * @param int $id
     */
    public function deleteOldFile($model)
    {
        $fileName = $model->link_document;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
