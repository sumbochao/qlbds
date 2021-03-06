<?php
return [
	"backend" => [
	"access" => [
	"roles" => [
	"already_exists" => "That role already exists. Please choose a different name.",
	"cant_delete_admin" => "You can not delete the Administrator role.",
	"create_error" => "There was a problem creating this role. Please try again.",
	"delete_error" => "There was a problem deleting this role. Please try again.",
	"has_users" => "You can not delete a role with associated users.",
	"needs_permission" => "You must select at least one permission for this role.",
	"not_found" => "That role does not exist.",
	"update_error" => "There was a problem updating this role. Please try again.",
	],
	"permissions" => [
	"already_exists" => "That permission already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this permission. Please try again.",
	"delete_error" => "There was a problem deleting this permission. Please try again.",
	"not_found" => "That permission does not exist.",
	"update_error" => "There was a problem updating this permission. Please try again.",
	],
	"users" => [
	"cant_deactivate_self" => "You can not do that to yourself.",
	"cant_delete_self" => "You can not delete yourself.",
	"cant_delete_admin" => "You can not delete Admin.",
	"cant_delete_own_session" => "You can not delete your own session.",
	"cant_restore" => "This user is not deleted so it can not be restored.",
	"create_error" => "There was a problem creating this user. Please try again.",
	"delete_error" => "There was a problem deleting this user. Please try again.",
	"delete_first" => "This user must be deleted first before it can be destroyed permanently.",
	"email_error" => "That email address belongs to a different user.",
	"mark_error" => "There was a problem updating this user. Please try again.",
	"not_found" => "That user does not exist.",
	"restore_error" => "There was a problem restoring this user. Please try again.",
	"role_needed_create" => "You must choose at lease one role.",
	"role_needed" => "You must choose at least one role.",
	"session_wrong_driver" => "Your session driver must be set to database to use this feature.",
	"change_mismatch" => "That is not your old password.",
	"update_error" => "There was a problem updating this user. Please try again.",
	"update_password_error" => "There was a problem changing this users password. Please try again.",
	],
	],
	"pages" => [
	"already_exists" => "That Page already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Page. Please try again.",
	"delete_error" => "There was a problem deleting this Page. Please try again.",
	"not_found" => "That Page does not exist.",
	"update_error" => "There was a problem updating this Page. Please try again.",
	],
	"blogcategories" => [
	"already_exists" => "That Blog Category already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Blog Category. Please try again.",
	"delete_error" => "There was a problem deleting this Blog Category. Please try again.",
	"not_found" => "That Blog Category does not exist.",
	"update_error" => "There was a problem updating this Blog Category. Please try again.",
	],
	"blogtags" => [
	"already_exists" => "That Blog Tag already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Blog Tag. Please try again.",
	"delete_error" => "There was a problem deleting this Blog Tag. Please try again.",
	"not_found" => "That Blog Tag does not exist.",
	"update_error" => "There was a problem updating this Blog Tag. Please try again.",
	],
	"settings" => [
	"update_error" => "There was a problem updating this Settings. Please try again.",
	],
	"menus" => [
	"already_exists" => "That Menu already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Menu. Please try again.",
	"delete_error" => "There was a problem deleting this Menu. Please try again.",
	"not_found" => "That Menu does not exist.",
	"update_error" => "There was a problem updating this Menu. Please try again.",
	],
	"modules" => [
	"already_exists" => "That Module already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Module. Please try again.",
	"delete_error" => "There was a problem deleting this Module. Please try again.",
	"not_found" => "That Module does not exist.",
	"update_error" => "There was a problem updating this Module. Please try again.",
	],
	"departments" => [
	"already_exists" => "That Department already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Department. Please try again.",
	"delete_error" => "There was a problem deleting this Department. Please try again.",
	"not_found" => "That Department does not exist.",
	"update_error" => "There was a problem updating this Department. Please try again.",
	],
	"documents" => [
	"already_exists" => "That Document already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Document. Please try again.",
	"delete_error" => "There was a problem deleting this Document. Please try again.",
	"not_found" => "That Document does not exist.",
	"update_error" => "There was a problem updating this Document. Please try again.",
	],
	"streets" => [
	"already_exists" => "That Street already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Street. Please try again.",
	"delete_error" => "There was a problem deleting this Street. Please try again.",
	"not_found" => "That Street does not exist.",
	"update_error" => "There was a problem updating this Street. Please try again.",
	],
	"provinces" => [
	"already_exists" => "That Province already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Province. Please try again.",
	"delete_error" => "There was a problem deleting this Province. Please try again.",
	"not_found" => "That Province does not exist.",
	"update_error" => "There was a problem updating this Province. Please try again.",
	],
	"districts" => [
	"already_exists" => "That District already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this District. Please try again.",
	"delete_error" => "There was a problem deleting this District. Please try again.",
	"not_found" => "That District does not exist.",
	"update_error" => "There was a problem updating this District. Please try again.",
	],
	"wards" => [
	"already_exists" => "That Ward already exists. Please choose a different name.",
	"create_error" => "There was a problem creating this Ward. Please try again.",
	"delete_error" => "There was a problem deleting this Ward. Please try again.",
	"not_found" => "That Ward does not exist.",
	"update_error" => "There was a problem updating this Ward. Please try again.",
	],
	],
	"frontend" => [
	"auth" => [
	"confirmation" => [
	"already_confirmed" => "Your account is already confirmed.",
	"confirm" => "Confirm your account!",
	"created_confirm" => "Your account was successfully created. We have sent you an e-mail to confirm your account.",
	"created_pending" => "Your account was successfully created and is pending approval. An e-mail will be sent when your account is approved.",
	"mismatch" => "Your confirmation code does not match.",
	"not_found" => "That confirmation code does not exist.",
	"resend" => "Your account is not confirmed. Please click the confirmation link in your e-mail, or <a href=http://api.johnnguyenn.com/account/confirm/resend/:user_id>click here</a> to resend the confirmation e-mail.",
	"success" => "Your account has been successfully confirmed!",
	"resent" => "A new confirmation e-mail has been sent to the address on file.",
	],
	"deactivated" => "Your account has been deactivated.",
	"email_taken" => "That e-mail address is already taken.",
	"password" => [
	"change_mismatch" => "That is not your old password.",
	],
	"registration_disabled" => "Registration is currently closed.",
	],
	],
];