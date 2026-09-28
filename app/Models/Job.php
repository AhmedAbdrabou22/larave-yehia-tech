<?php

namespace App\Models;


class Job
{
    public static function all(){
        return [
            ['title'=>"Front End Developer",'description'=>"We are looking for a front end developer with experience in React and Vue.js"],
            ['title'=>"Back End Developer",'description'=>"We are looking for a back end developer with experience in Laravel and Node.js"],
            ['title'=>"Full Stack Developer",'description'=>"We are looking for a full stack developer with experience in React, Vue.js, Laravel and Node.js"],
            ['title'=>"Mobile Developer",'description'=>"We are looking for a mobile developer with experience in React Native and Flutter"],
            ['title'=>"DevOps Engineer",'description'=>"We are looking for a DevOps engineer with experience in AWS and Docker"],
            ['title'=>"UI/UX Designer",'description'=>"We are looking for a UI/UX designer with experience in Figma and Adobe XD"],
        ];
    }
}
