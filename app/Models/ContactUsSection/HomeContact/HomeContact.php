<?php

namespace App\Models\ContactUsSection\HomeContact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeContact extends Model
{
    use HasFactory;

    private static $home_contact, $home_contacts;

    public static function createHomeContact($request)
    {
        try {
            self::$home_contact            = new HomeContact();
            self::saveBasicInfo(new HomeContact(), $request);
            self::$home_contact->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateHomeContact($request, $id)
    {
        try {
            self::$home_contact = HomeContact::find($id);
            self::saveBasicInfo(self::$home_contact, $request);
            self::$home_contact->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteHomeContact($id)
    {
        try {
            self::$home_contact = HomeContact::find($id);
            self::$home_contact->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($home_contact, $request)
    {
        self::$home_contact->first_name             = $request->first_name;
        self::$home_contact->company                = $request->company;
        self::$home_contact->email                  = $request->email;
        self::$home_contact->number                 = $request->number;
        self::$home_contact->note                   = $request->note;
    }

}
