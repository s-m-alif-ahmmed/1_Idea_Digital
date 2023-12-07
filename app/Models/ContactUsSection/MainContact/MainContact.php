<?php

namespace App\Models\ContactUsSection\MainContact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MainContact extends Model
{
    use HasFactory;

    private static $main_contact, $main_contacts;

    public static function createMainContact($request)
    {
        try {
            self::$main_contact            = new MainContact();
            self::saveBasicInfo(new MainContact(), $request);
            self::$main_contact->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateMainContact($request, $id)
    {
        try {
            self::$main_contact = MainContact::find($id);
            self::saveBasicInfo(self::$main_contact, $request);
            self::$main_contact->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteMainContact($id)
    {
        try {
            self::$main_contact = MainContact::find($id);
            self::$main_contact->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($main_contact, $request)
    {
        self::$main_contact->full_name               = $request->full_name;
        self::$main_contact->email                   = $request->email;
        self::$main_contact->number                  = $request->number;
        self::$main_contact->message                 = $request->message;
        self::$main_contact->service                 = $request->service;
        self::$main_contact->note                    = $request->note;
    }


}
