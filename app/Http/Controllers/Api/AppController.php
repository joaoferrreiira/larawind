<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\SettingsResource;
use App\Http\Resources\PlantsTypesCategoriesResource;
use App\Http\Resources\PlantsTypesResource;
use App\Http\Resources\PlantsResource;
use App\Http\Resources\UsersResource;
use App\Http\Resources\TipsResource;
use App\Http\Resources\ChallengesCategoriesResource;
use App\Http\Resources\ChallengesResource;
use App\Http\Resources\GlossaryResource;
use App\Http\Resources\JourneysResource;
use App\Http\Resources\JourneyChallengesResource;
use App\Http\Resources\CoordinateResource;
use Illuminate\Support\Str;

use App\Models\Tips;
use App\Models\ChallengesCategories;
use App\Models\Settings;
use App\Models\Avatars;
use App\Models\PlantsTypeCategory;
use App\Models\PlantsType;
use App\Models\PlantsCoordinates;
use App\Models\User;
use App\Models\Plants;
use App\Models\Journeys;

class AppController extends Controller
{
    // JÁ NA APP
    public function login(Request $r)
    {
        if (User::where('email', $r->email)->get()->count() > 0) {
            foreach (User::get() as $u) {
                if ($u->email == $r->email && password_verify($r->password, $u->password)) {
                    return User::find($u->id);
                }
            }
            return 'NO';
        } else {
            return 'NO';
        }
    }

    // JÁ NA APP
    public function register(Request $r)
    {
        if (User::where('email', $r->email)->get()->count() > 0) {
            return 'NO';
        } else {
            $user = new User;
            $user->name = $r->name;
            $user->email = $r->email;
            $user->password = password_hash($r->password, PASSWORD_DEFAULT);
            $user->points = 0;
            $user->avatar = Avatars::find($r->avatar)->avatar;

            $saved = $user->save();

            if (!$saved) {
                return 'NO';
            } else {
                return User::where('email', $r->email)->select('id', 'avatar')->first();
            }
        }
    }

    // JÁ NA APP
    public function getEmailsRegistered()
    {
        return DB::table('users')->select('email')->get();
    }

    // JÁ NA APP
    public function getSettings(Request $r)
    {
        return $r->set == 'terms' ? Settings::get()->first()->terms : Settings::get()->first()->privacy_politics;
    }

    // JÁ NA APP
    public function getPlantsTypesCategories()
    {
        $a = [];

        foreach (PlantsTypeCategory::select('id', 'name')->get() as $p) {
            array_push($a, $p->id . '/' . $p->name);
        }

        return $a;
    }

    // JÁ NA APP
    public function getPlantsTypes(Request $r)
    {
        return PlantsTypesResource::collection(PlantsTypeCategory::find($r->id)->types);
    }

    // JÁ NA APP
    public function getTips()
    {
        //http://192.168.8.106:8000/api/getTips
        return Tips::inRandomOrder()->first()->tip;
    }

    // JÁ NA APP, FALTA CONTAGEM CHALLENGES DONE
    public function getChallengesCategories(Request $r)
    {
        $a = [];

        foreach (ChallengesCategories::get() as $c) {
            array_push(
                $a,
                $c->id . '/' . $c->name . '/' . $c->description . '/0/' . ChallengesCategories::find($c->id)->challenges->count()
            );
        }


        return $a;
    }

    // JÁ NA APP, FALTA CONTAGEM CHALLENGES DONE
    public function getChallenges(Request $r)
    {
        return ChallengesResource::collection(ChallengesCategories::find($r->categoria)->challenges);
    }

    // JÁ NA APP
    public function getJourneys(Request $r)
    {
        $a = collect([]);
        $pts = 0;

        foreach (Journeys::orderBy('max_points', 'asc')->get() as $j) {
            $a->push([
                'id' => $j->id,
                'name' => $j->name,
                'prevPoints' => $pts,
                'max_points' => $j->max_points,
            ]);
            $pts = $j->max_points;
        }

        return $a;
    }

    // JÁ NA APP, FALTA CORRIGIR DONE
    public function getJourneyChallenges(Request $r)
    {
        $a = collect([]);

        foreach (Journeys::find($r->id)->challenges as $j) {
            $a->push([
                'id' => $j->id,
                'challenge' => $j->challenge,
                'points' => $j->points,
                'done' => false,
            ]);
        }

        return $a;
    }

    public function getPrizes(Request $r)
    {
        //http://192.168.8.106:8000/api/getprizes?id_user=1
    }

    // JÁ NA APP / FALTA PLANT TYPE
    public function getCoordinates(Request $r)
    {
        $b = collect([]);

        foreach (PlantsCoordinates::get() as $a) {
            $b->push([
                "id" => $a->id,
                "x" => $a->x,
                "y" => $a->y,
                "plant" => $a->plants_id,
                "user" => $a->users_id,
                /* "icon" => Plants::find($a->plants_id)
                    ->types()
                    ->orderBy('id', 'asc')
                    ->where('plants_id', $a->plants_id)
                    ->get()
                    ->where('plants_types_categories_id', 1)
                    ->first()
                    ->icon, */
            ]);
        }

        return $b;
    }

    // JÁ NA APP / FALTA IMAGENS
    public function getPlantsFound(Request $r)
    {
        $b = collect([]);

        foreach (PlantsCoordinates::where('users_id', $r->id)->get() as $a) {

            $p = Plants::find($a->plants_id);

            $b->push([
                "idCoord" => $a->id,
                "id" => $p->id,
                "image" => $p->images,
                "name" => $p->name,
                "scientificName" => $p->scientific_name,
            ]);
        }

        return $b;
    }

    // JÁ NA APP / FALTA IMAGENS
    public function getPlantInfo(Request $r)
    {
        return new PlantsResource(Plants::find($r->id));
    }

    // JÁ NA APP / FALTA IMAGENS
    public function getSinglePlantInfo(Request $r)
    {
        $plant = Plants::find($r->id);

        $a = [];

        array_push(
            $a,
            explode(' ', User::find($r->user)->name)[0],
            $plant->id,
            $plant->name,
            $plant->scientific_name,
            $plant->images
        );

        return $a;
    }

    public function addCoordinate(Request $r)
    {
        DB::table('plants_coordinates')->insert([
            'x' => $r->x,
            'y' => $r->y,
            'users_id' => $r->user_id,
            'plants_id' => $r->plant_id,
        ]);

        return true;
    }

    // JÁ NA APP
    public function getUserPoints(Request $r)
    {
        return DB::table('users')->find($r->id)->points;
    }

    // JÁ NA APP
    public function setUserPoints(Request $r)
    {
        DB::table('users')->where('id', $r->id)->update([
            'points' => $r->points
        ]);

        return true;
    }

    // JÁ NA APP, FALTA LINK PARA AVATARS
    public function getAvatars()
    {
        return Avatars::select('id', 'avatar')->get();
    }

    // JÁ NA APP
    public function getGlossary(Request $r)
    {
        return GlossaryResource::collection(DB::table('glossary')->orderBy('term', 'asc')->select('id', 'term', 'description')->where('term', 'LIKE', Str::ucfirst($r->term) . '%')->get());
    }

    // JÁ NA APP
    public function getInfoTopBarMap1(Request $r)
    {
        $points = User::find($r->id)->points;
        $a = [];
        $prevPoints = 0;
        $lvl = 1;
        foreach (Journeys::get() as $j) {
            if ($points >= $prevPoints && $points <= $j->max_points) {
                array_push($a, strval($lvl), $j->name, strval($j->max_points));
                break;
            } else {
                $prevPoints = $j->max_points;
                $lvl++;
            }
        }
        return $a;
    }

    public function getInfoTopBarMap2(Request $r)
    {
        $a = collect([]);

        foreach (PlantsType::where('plants_types_categories_id', 1)->get() as $c) {
            $a->push([
                'id' => $c->id,
                'name' => $c->name,
                'numPlants' => $this->countNumPlants($r->id),
            ]);
        }

        return $a;
    }

    function countNumPlants($id)
    {
        $result = 0;

        return $result;
    }
}
