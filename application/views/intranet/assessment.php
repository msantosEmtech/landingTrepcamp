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
                        <form id="formAC">
                            <div id="middle-wizard">
                                <?php foreach ($arr_ac as $question) { ?>
                                    <div class="step" id="ask<?= $question['question_id'] ?>" hidden>
                                        <h4 class="mb-4"><?= $question['question'] ?></h4>
                                        <div class="d-flex">
                                            <div class="mt-1">
                                                <input type="radio" name="pregunta<?= $question['question_id'] ?>" value="<?= $question['value1'] ?>" class="required radio-custom radio<?= $question['question_id'] ?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer1'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1">
                                                <input type="radio" name="pregunta<?= $question['question_id'] ?>" value="<?= $question['value2'] ?>" class="required radio-custom radio<?= $question['question_id'] ?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer2'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1">
                                                <input type="radio" name="pregunta<?= $question['question_id'] ?>" value="<?= $question['value3'] ?>" class="required radio-custom radio<?= $question['question_id'] ?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer3'] ?></p>
                                        </div>
                                        <?php if ($question['question_id'] != 2) {?>
                                        
                                        <div class="d-flex">
                                            <div class="mt-1">
                                                <input type="radio" name="pregunta<?= $question['question_id'] ?>" value="<?= $question['value4'] ?>" class="required radio-custom radio<?= $question['question_id'] ?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer4'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-1">
                                                <input type="radio" name="pregunta<?= $question['question_id'] ?>" value="<?= $question['value5'] ?>" class="required radio-custom radio<?= $question['question_id'] ?>">
                                            </div>
                                            <p class="px-3"><?= $question['answer5'] ?></p>
                                        </div>

                                        <?php }?>
                                    </div>


                                <?php } ?>
                                <hr style="height: 5px !important;">
                                <div class="d-flex justify-content-between">
                                    <button id="btnAtras" type="button" name="backward" class="backward btnAmarilloJoin"><b style="color: #FFF;">Back</b></button>
                                    <p class="mt-2"><a id="contador">1</a>/<a id="num_preguntas"></a></p>
                                    <button id="btnContinuar" type="button" name="forward" class="forward btnAmarilloJoin"><b style="color: #FFF;">Next</b></button>
                                </div>                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secction pb-5" id="video-up" style="display: none;">
    <div class="container ac-seccion" style="background-color: transparent !important;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 align-items-center col-md-6 d-flex justify-content-center">
                    <div class="mt-5">
                        <img src="<?= base_url('assets/img/ac-done.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="wizard_container" class="px-1 mt-5 mb-4">
                        <h4 class="pt-4 px-3">You're at the last step of our Assessment</h4>
                        <p class="pt-2 px-3">We want to know more about you. Share with us your intent submission video recorded*, answering the following question:</p>
                        <p class="pt-2 px-3" style="color:#00A8FF;">How do I want to improve the world after experiencing this program?</p>
                        <p class="pt-4 px-3" style="font-size:12px">*Video may extend to maximum 1 minute.</p>

                        <div class="mt-4 mb-4">
                            <div class="w-100 p-3 text-center uploads"  style="background-color: rgba(165, 165, 165, 0.12);">
                                <p id="launch-file" class="m-0"><img src="<?= base_url('assets/img/upload.svg')?>"><b style="padding-left: 10px;"<u>Upload</u></b> original video file</p>
                            </div>
                            <input type="file" id="ac-vid" accept="video/*" name="ac-vid">
                        </div>
                        <hr style="height: 5px !important;">
                        
                        <div class="col-md-12 d-flex justify-content-center mt-4">
                            <button id="btnSend" name="process" class="submit btnAmarilloJoin"><b style="color: #FFF;">Send</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="modalCongratulations" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="<?= base_url('assets/img/iconCheckTiktok.png') ?>" ><p style="color: #474747;font-weight: 600;font-size: 16px;line-height: 26px;">Congratulations!</p></h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <p>Your submission for our Entrepreneurial Competencies Assessment was received successfully. You're now participating to win our Assessment Category prize. </p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button id="btnGoChallenge" type="button" class="btn btn-primary btnAmarillo">Go to challenge</button>
      </div>
    </div>
  </div>
</div>

<div id="modalErrorTiktok" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="<?= base_url('assets/img/iconErrorTiktok.png') ?>" ><p style="color: #474747;font-weight: 600;font-size: 16px;line-height: 26px;">Your participation could not be processed</p></h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <p>There was a problem loading your result, please upload it again.</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button id="btnGoChallenge2" type="button" class="btn btn-primary btnAmarillo">Go to challenge</button>
      </div>
    </div>
  </div>
</div>
