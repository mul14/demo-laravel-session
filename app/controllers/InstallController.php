<?php

class InstallController extends BaseController
{
    public function step()
    {
        // Ini nya nggak penting -_-
        if (Session::has('step'))
        {
            $step = Session::get('step');

            switch($step)
            {
                case 2:
                    return View::make('step2');

                case 3:
                    return View::make('step3');
            }
        }

        Session::put('step', 1);
        return View::make('step1');
    }

    public function setStep()
    {
        // Nah ini bisa kok ngeset session :/
        $step = (int) Input::get('current_step') + 1;
        Session::put('step', $step);
        return Redirect::to('install');
    }
}
