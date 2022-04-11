<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'locale'                   => 'Locale',
            'locale_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
            'users'             => 'Users',
            'users_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Event',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Attributes',
            'properties_helper'   => ' ',
            'host'                => 'IP',
            'host_helper'         => ' ',
            'created_at'          => 'Event time',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'body' => [
        'title'          => 'Remains',
        'title_singular' => 'Remain',
        'fields'         => [
            'id'                                => 'ID',
            'id_helper'                         => ' ',
            'first_name'                        => 'First Name',
            'first_name_helper'                 => ' ',
            'last_name'                         => 'Last Name',
            'last_name_helper'                  => ' ',
            'date_of_birth'                     => 'Date Of Birth',
            'date_of_birth_helper'              => ' ',
            'death_date'                        => 'Death Date',
            'death_date_helper'                 => ' ',
            'ssn'                               => 'Ssn',
            'ssn_helper'                        => ' ',
            'height'                            => 'Height',
            'height_helper'                     => ' ',
            'weight'                            => 'Weight',
            'weight_helper'                     => ' ',
            'place_of_removal'                  => 'Place Of Removal',
            'place_of_removal_helper'           => ' ',
            'time_of_death'                     => 'Time Of Death',
            'time_of_death_helper'              => ' ',
            'covid'                             => 'Covid',
            'covid_helper'                      => ' ',
            'me_case_number'                    => 'M.E. Case #',
            'me_case_number_helper'             => ' ',
            'house_removal'                     => 'House Removal',
            'house_removal_helper'              => ' ',
            'rd_number'                         => 'RD#',
            'rd_number_helper'                  => ' ',
            'stair_location'                    => 'Stair Location',
            'stair_location_helper'             => ' ',
            'family_ready_for_removal'          => 'Family Ready For Removal',
            'family_ready_for_removal_helper'   => ' ',
            'doctors_name'                      => 'Doctors Name',
            'doctors_name_helper'               => ' ',
            'doctors_phone_number'              => 'Doctors Phone Number',
            'doctors_phone_number_helper'       => ' ',
            'doctors_fax'                       => 'Doctors Fax',
            'doctors_fax_helper'                => ' ',
            'at_need_service_id_number'         => 'At Need Service Id Number',
            'at_need_service_id_number_helper'  => ' ',
            'pre_need_number'                   => 'Pre Need Number(Leave Blank If None)',
            'pre_need_number_helper'            => ' ',
            'next_of_kin'                       => 'Next Of Kin',
            'next_of_kin_helper'                => ' ',
            'relationship'                      => 'Relationship',
            'relationship_helper'               => ' ',
            'next_of_kin_address'               => 'Next Of Kin Address',
            'next_of_kin_address_helper'        => ' ',
            'next_of_kin_phone'                 => 'Next Of Kin Phone',
            'next_of_kin_phone_helper'          => ' ',
            'next_of_kin_email'                 => 'Next Of Kin Email',
            'next_of_kin_email_helper'          => ' ',
            'called_in_by'                      => 'Called In By',
            'called_in_by_helper'               => ' ',
            'called_in_by_relationship'         => 'Called In By Relationship',
            'called_in_by_relationship_helper'  => ' ',
            'called_in_by_phone'                => 'Called In By Phone',
            'called_in_by_phone_helper'         => ' ',
            'embalm'                            => 'Should Gatling Embalm?',
            'embalm_helper'                     => ' ',
            'call_received_by'                  => 'Call Received By',
            'call_received_by_helper'           => ' ',
            'call_received_by_date_time'        => 'Date/Time',
            'call_received_by_date_time_helper' => ' ',
            'removal_made_by'                   => 'Removal Made By',
            'removal_made_by_helper'            => ' ',
            'removal_date_time'                 => 'Removal Date/Time',
            'removal_date_time_helper'          => ' ',
            'personal_item_picked_up'           => 'Personal Item Picked Up?',
            'personal_item_picked_up_helper'    => ' ',
            'list_of_items_received'            => 'List Of Items Received',
            'list_of_items_received_helper'     => ' ',
            'family_notified'                   => 'Family Notified',
            'family_notified_helper'            => ' ',
            'photo'                             => 'Photo',
            'photo_helper'                      => ' ',
            'created_at'                        => 'Created at',
            'created_at_helper'                 => ' ',
            'updated_at'                        => 'Updated at',
            'updated_at_helper'                 => ' ',
            'deleted_at'                        => 'Deleted at',
            'deleted_at_helper'                 => ' ',
        ],
    ],
];
