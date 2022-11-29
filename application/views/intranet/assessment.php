<section class="secction pt-5 pb-5" id="instrucctions">
    <div class="container">
        <div class="col-md-12 seccion1-sumary">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <img src="<?= base_url('assets/img/trepsCompu.png') ?>" alt="">
                    </div>
                    <h4 class="pt-4 px-3">It's your time to prove your capacities around 7 entrepreneurial competencies through our Assessment.</h4>
                    <p class="pt-2 px-3">Test your level of development on the entrepreneurial skills. Through a circumstantial diagnosis, face real and common scenarios that happen in the life of an entrepreneur.</p>
                    <p class="pt-2 px-3" style="color:#6A6A6A; font-size:14px">At the end of the Assessment, you will have to upload an intention video explaining: "how do you want to change the world after this program?"</p>
                </div>
                <div class="col-md-6 text-center" style="background-color: rgba(0, 168, 255, 0.2);">
                    <h6 class="mt-5 mb-4">Topics inside the assessment:</h6>
                    <p><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Innovation skills</p>
                    <p><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Relationship building</p>
                    <p><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Execution skills</p>
                    <p><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Business sense</p>
                    <p><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Endurance</p>
                    <p><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Growth driven mindset</p>
                    <p class="mb-5"><img src="<?= base_url('assets/img/topic.svg') ?>" alt="" srcset="">Sense of purpose</p>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="d-flex justify-content-center mb-4">
                        <button id="start_AC" class="btn btn-primary btnAmarilloStories"><b>Start Assessment</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="secction pb-5" id="AC" style="display: none;">
    <div class="container ac-seccion">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 align-items-center col-md-6 d-flex justify-content-center">
                    <div class="mt-5">
                        <img src="<?= base_url('assets/img/ac-icon.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="wizard_container" class="px-1 mt-5 mb-4">
                        <form>
                            <div id="middle-wizard">
                                <?php foreach ($arr_ac as $question) { ?>
                                    <div class="step" id="ask<?= $question['question_id'] ?>" hidden>
                                        <h4 class="mb-4"><?= $question['question'] ?></h4>
                                        <div class="d-flex">                                                                                      
                                            <div class="mt-1"> 
                                                <input type="radio" name="pregunta<?= $question['question_id']?>" value="<?= $question['value1']?>" class="required radio-custom radio<?= $question['question_id']?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer1'] ?></p>                                            
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1"> 
                                                <input type="radio" name="pregunta<?= $question['question_id']?>" value="<?= $question['value2']?>" class="required radio-custom radio<?= $question['question_id']?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer2'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1"> 
                                                <input type="radio" name="pregunta<?= $question['question_id']?>" value="<?= $question['value3']?>" class="required radio-custom radio<?= $question['question_id']?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer3'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1"> 
                                                <input type="radio" name="pregunta<?= $question['question_id']?>" value="<?= $question['value4']?>" class="required radio-custom radio<?= $question['question_id']?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer4'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1"> 
                                                <input type="radio" name="pregunta<?= $question['question_id']?>" value="<?= $question['value5']?>" class="required radio-custom radio<?= $question['question_id']?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer5'] ?></p>
                                        </div>
                                    </div>
                                    

                                <?php } ?>
                                <hr style="height: 5px !important;">
                                <div class="d-flex justify-content-between">
                                    <button id="btnAtras" type="button" name="backward" class="backward btnAmarilloJoin"><b style="color: #FFF;">Back</b></button>
                                    <p  class="mt-2"><a id="contador">1</a>/<a id="num_preguntas"></a></p>
                                    <button id="btnContinuar" type="button" name="forward" class="forward btnAmarilloJoin"><b style="color: #FFF;">Next</b></button>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center mt-4">
                                    <button id="btnSend" name="process" class="submit btnAmarillo"hidden><b style="color: #FFF;">Send</b></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
</section>
