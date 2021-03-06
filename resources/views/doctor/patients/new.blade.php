@extends('layouts.sisgec')

@section('content')
    <div class="row align-items-center">
        <div class="col text-left">
            <h2 class="c-grey-900 mT-10 mB-30">{{ __("global.new_patient") }} </h2>
        </div>
    </div>

    <form action="{{ route("patients.save") }}" method="POST" class="inputs-auto-scroll">
        @csrf
        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">1. {{ __("global.identification_card") }}</h4>
                    <div class="mT-30">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">{{ __("person.full_name") }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" name="patient[name]" placeholder="{{ __("person.name") }}" />
                                        <input type="text" class="form-control" id="lastname" name="patient[lastname]" placeholder="{{ __("person.lastname") }}" />
                                        <input type="text" class="form-control" id="nickname" name="patient[nickname]" placeholder="{{ __("person.nickname") }}" />
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="birthdate">{{ __("person.sex") }}</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input sex" type="radio" name="patient[sex]" id="sexm" checked value="0">
                                                    <label class="form-check-label" for="sexm">{{ __("global.man") }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input sex" type="radio" name="patient[sex]" id="sexw" value="1">
                                                    <label class="form-check-label" for="sexw">{{ __("global.woman") }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <label for="birthdate">{{ __("person.birthdate") }}</label>
                                            <div class="row">
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="birthdate" name="patient[birthdate]" placeholder="dd/mm/yyyy" />
                                                </div>
                                                <div class="col-3">
                                                    <input class="form-control-plaintext" type="text" readonly id="age" tabindex="-1" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="scholarship">{{ __("person.scholarship") }}</label>
                                            <input type="text" class="form-control" id="scholarship" name="patient[scholarship]" value="" />
                                        </div>
                                        <div class="col-6">
                                            <label for="occupation">{{ __("person.occupation") }}</label>
                                            <input type="text" class="form-control" id="occupation" name="patient[occupation]" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="religion">{{ __("person.religion") }}</label>
                                            <input type="text" class="form-control" id="religion" name="patient[religion]" value="" />
                                        </div>
                                        <div class="col-6">
                                            <label for="civil_status">{{ __("person.civil_status") }}</label>
                                            <input type="text" class="form-control" id="civil_status" name="patient[civil_status]" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="place_of_birth">{{ __("person.place_of_birth") }}</label>
                                            <input type="text" class="form-control" id="place_of_birth" name="patient[place_of_birth]" value="" />
                                        </div>
                                        <div class="col-6">
                                            <label for="place_of_residence">{{ __("person.place_of_residence") }}</label>
                                            <input type="text" class="form-control" id="place_of_residence" name="patient[place_of_residence]" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="weight">{{ __("person.weight") }}</label>
                                            <input type="text" class="form-control" id="weight" name="measure[weight]" value="" />
                                        </div>
                                        <div class="col-4">
                                            <label for="height">{{ __("person.height") }}</label>
                                            <input type="text" class="form-control" id="height" name="measure[height]" value="" />
                                        </div>
                                        <div class="col-4">
                                            <label for="temperature">{{ __("person.temperature") }}</label>
                                            <input type="text" class="form-control" id="temperature" name="measure[temperature]" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="heart_rate">{{ __("person.heart_rate") }}</label>
                                            <input type="text" class="form-control" id="heart_rate" name="measure[heart_rate]" value="" />
                                        </div>
                                        <div class="col-4">
                                            <label for="blood_pressure">{{ __("person.blood_pressure") }}</label>
                                            <input type="text" class="form-control" id="blood_pressure" name="measure[blood_pressure]" value="" />
                                        </div>
                                        <div class="col-4">
                                            <label or="breathing_frequency">{{ __("person.breathing_frequency") }}</label>
                                            <input type="text" class="form-control" id="breathing_frequency" name="measure[breathing_frequency]" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="email">{{ __("person.email") }}</label>
                                            <input type="email" class="form-control" id="email" name="patient[email]" value="" />
                                        </div>
                                        <div class="col-6">
                                            <label for="phone">{{ __("person.phone") }}</label>
                                            <input type="text" class="form-control" id="phone" name="patient[phone]" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="referred_by">{{ __("person.referred_by") }}</label>
                                            <input type="text" class="form-control" id="referred_by" name="patient[referred_by]" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">2. {{ __("global.anamnesis") }}</h4>
                    <div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="inherit_family">{{ __("global.inherit_family") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="inherit_family" id="inherit_family" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="c-grey-900">2.1 {{ __("global.not_pathological") }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.living_place") }}</label>
                                        <textarea class="form-control" name="non_pathological[living_place]" id="living_place" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.personal_hygiene") }}</label>
                                        <textarea class="form-control" name="non_pathological[personal_hygiene]" id="personal_hygiene" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.sport_activities") }}</label>
                                        <textarea class="form-control" name="non_pathological[sport_activities]" id="sport_activities" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.hobbies") }}</label>
                                        <textarea class="form-control" name="non_pathological[hobbies]" id="hobbies" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.immunizations") }}</label>
                                        <textarea class="form-control" name="non_pathological[immunizations]" id="immunizations" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.smoking") }}</label>
                                        <textarea class="form-control" name="non_pathological[smoking]" id="smoking" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.alcoholism") }}</label>
                                        <textarea class="form-control" name="non_pathological[alcoholism]" id="alcoholism" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.drug") }}</label>
                                        <textarea class="form-control" name="non_pathological[drug]" id="drug" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.work_activities") }}</label>
                                        <textarea class="form-control" name="non_pathological[work_activities]" id="work_activities" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.feeding") }}</label>
                                        <textarea class="form-control" name="non_pathological[feeding]" id="feeding" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="c-grey-900">2.2 {{ __("global.pathological_personal") }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.childhood_diseases") }}</label>
                                        <textarea class="form-control" name="pathological[childhood_diseases]" id="childhood_diseases" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.surgical_operations") }}</label>
                                        <textarea class="form-control" name="pathological[surgical_operations]" id="surgical_operations" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.accidents") }}</label>
                                        <textarea class="form-control" name="pathological[accidents]" id="accidents" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.traumatic_brain_injury") }}</label>
                                        <textarea class="form-control" name="pathological[traumatic_brain_injury]" id="traumatic_brain_injury" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.allergies") }}</label>
                                        <textarea class="form-control" name="pathological[allergies]" id="allergies" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.disabilities") }}</label>
                                        <textarea class="form-control" name="pathological[disabilities]" id="disabilities" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.blood_transfusions") }}</label>
                                        <textarea class="form-control" name="pathological[blood_transfusions]" id="blood_transfusions" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="c-grey-900">{{ __("global.gynecological_obstetric_history") }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.ivsa") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[ivsa]" id="ivsa" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.menarca") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[menarca]" id="menarca" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
        
                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.fur") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[fur]" id="fur" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.came") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[came]" id="came" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.pregnancies_number") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[pregnancies_number]" id="pregnancies_number" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.births_number") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[births_number]" id="births_number" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.abortions_number") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[abortions_number]" id="abortions_number" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.ets") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[ets]" id="ets" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.cesareans_number") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[cesareans_number]" id="cesareans_number" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.uma") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[uma]" id="uma" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.other_gyneco_info") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[other_gyneco_info]" id="other_gyneco_info" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.last_papanicolaou_date") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[last_papanicolaou_date]" id="last_papanicolaou_date" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="row hide-if-sex-is-male">
                                    <div class="col form-group">
                                        <label class="c-grey-900 pT-10">{{ __("global.last_mammogram_date") }}</label>
                                        <textarea class="form-control" name="gyneco_obstetrics[last_mammogram_date]" id="last_mammogram_date" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">3. {{ __("global.current-condition") }}</h4>
                    <div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <textarea class="form-control" name="initial_clinical_history[current_condition]" id="current_condition" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">4. {{ __("global.physical-exploration") }}</h4>
                    <div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="general_appearance">{{ __("global.general_appearance") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[general_appearance]" id="general_appearance" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="head">{{ __("global.head") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[head]" id="head" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="neck">{{ __("global.neck") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[neck]" id="neck" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="chest">{{ __("global.chest") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[chest]" id="chest" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="abdomen">{{ __("global.abdomen") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[abdomen]" id="abdomen" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="back">{{ __("global.back") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[back]" id="back" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="extremities">{{ __("global.extremities") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[extremities]" id="extremities" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="genitals">{{ __("global.genitals") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="physical_exploration[genitals]" id="genitals" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="c-grey-900">4.1 {{ __("global.neurological_examination") }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="mental_examination">{{ __("global.mental_examination") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[mental_examination]" id="mental_examination" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="c-grey-900">4.2 {{ __("global.orientation") }}</h5>
                            </div>
                            <div class="col-4">
                                <label for="time">{{ __("global.time") }}</label>
                                <textarea class="form-control" name="orientation[time]" id="time" cols="30" rows="2"></textarea>
                            </div>
                            <div class="col-4">
                                <label for="space">{{ __("global.space") }}</label>
                                <textarea class="form-control" name="orientation[space]" id="space" cols="30" rows="2"></textarea>
                            </div>
                            <div class="col-4">
                                <label for="person">{{ __("global.person") }}</label>
                                <textarea class="form-control" name="orientation[person]" id="person" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="language">{{ __("global.language") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[language]" id="language" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="memory">{{ __("global.memory") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[memory]" id="memory" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="c-grey-900">4.1 {{ __("global.superior_cognitive_functions") }}</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="hidden" style="display:none;" name="superior_cognitive_functions[abstract]" value="0">
                                        <input class="form-check-input" type="checkbox" name="superior_cognitive_functions[abstract]" id="scfa" value="1">
                                        <label class="form-check-label" for="scfa">{{ __('global.abstract') }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="hidden" style="display:none;" name="superior_cognitive_functions[concrete]" value="0">
                                        <input class="form-check-input" type="checkbox" name="superior_cognitive_functions[concrete]" id="scfc" value="1">
                                        <label class="form-check-label" for="scfc">{{ __('global.concrete') }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="hidden" style="display:none;" name="superior_cognitive_functions[literal]" value="0">
                                        <input class="form-check-input" type="checkbox" name="superior_cognitive_functions[literal]" id="scfl" value="1">
                                        <label class="form-check-label" for="scfl">{{ __('global.literal') }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="hidden" style="display:none;" name="superior_cognitive_functions[magical]" value="0">
                                        <input class="form-check-input" type="checkbox" name="superior_cognitive_functions[magical]" id="scfm" value="1">
                                        <label class="form-check-label" for="scfm">{{ __('global.magical') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="arithmetic_calculation">{{ __("global.arithmetic_calculation") }}</label>
                                        <textarea class="form-control" name="superior_cognitive_functions[arithmetic_calculation]" id="arithmetic_calculation" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label for="ability_to_draw">{{ __("global.ability_to_draw") }}</label>
                                        <textarea class="form-control" name="superior_cognitive_functions[ability_to_draw]" id="ability_to_draw" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="hallucinations">{{ __("global.hallucinations") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[hallucinations]" id="hallucinations" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="delusions">{{ __("global.delusions") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[delusions]" id="delusions" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="esape">{{ __("global.esape") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[esape]" id="esape" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="cranial_nerves">{{ __("global.cranial_nerves") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[cranial_nerves]" id="cranial_nerves" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="actor_system">{{ __("global.actor_system") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[actor_system]" id="actor_system" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="sensitive_system">{{ __("global.sensitive_system") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[sensitive_system]" id="sensitive_system" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="sist_vece">{{ __("global.sist_vece") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[vestibular_system]" id="vestibular_system" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 text-right">
                                <label class="c-grey-900 pT-20" for="meninges">{{ __("global.meninges") }}</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="neuro_exam[meninges]" id="meninges" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">5. {{ __("global.cabinet_studies") }}</h4>
                    <div>
                        <div id="uploadFiles" class="sigec__dropzone">
                            <div class="dz-message needsclick">    
                                Drop files here or click to upload.
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </div>
                        <div id="studies"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">6. {{ __("global.diagnostical_impression") }}</h4>
                    <div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="initial_clinical_history[diagnostical_impression]" id="diagnostical_impression" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">6. {{ __("global.treatment_plan") }}</h4>
                    <div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="initial_clinical_history[treatment_plan]" id="treatment_plan" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">6. {{ __("global.interconsultation") }}</h4>
                    <div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="initial_clinical_history[interconsultation]" id="interconsultation" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd input-block">
                    <h4 class="c-grey-900">6. {{ __("global.treatment") }}</h4>
                    <div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="initial_clinical_history[treatment]" id="treatment" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row sticky-footer">
            <div class="masonry-sizer col-md-12"></div>
            <div class="masonry-item col-md-12">
                <div class="bgc-white p-20 bd">
                    <div>
                        <div class="row justify-content-center">
                            <a href="{{ route("patients") }}" class="btn btn-danger">{{ __("global.exit") }}</a>
                            <button class="btn btn-success ml-2">{{ __("global.save_patient") }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal fade informed_consent_modal" tabindex="-1" role="dialog" aria-labelledby="informed_consent_modal_title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="informed_consent_modal_title">{{ __("global.informed_consent") }}</h5>
                </div>
                <div class="modal-body">
                    {!! __("global.informed_consent_description") !!}
                    <h6>{{ __("global.informed_consent_description_button") }}</h6>
                </div>
                <div class="modal-footer">
                    <a href="{{ route("patients") }}" class="btn btn-danger">{{ __("global.informed_consent_denied_button") }}</a>
                    <button type="button" class="btn btn-success" data-dismiss="modal">{{ __("global.informed_consent_accepted_button") }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
