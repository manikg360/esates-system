<?php

/* @var $this View */
/* @var $form ActiveForm */
/* @var $model SignupForm */

use frontend\models\SignupForm;
use kartik\widgets\FileInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$this->title = 'Signup';
//$this->params['breadcrumbs'][] = $this->title;

?>
<?php $form = ActiveForm::begin(['id' => 'form-signup','enableAjaxValidation' => true]); ?>
<div class="row">
        <div class="col m6 offset-m3 signup">
            <div class="user">
    <h1 style = "color: #3f51b5 !important;">Update Profile</h1>
    
    <hr>
     <div class="profile-pic" style="padding-left: 260px;">
		<!--<img src="res/images/profile.png">-->
                <!--<div class="edit">-->
                    
                    <?php
                    $txtInitialPreviews = '';
                    $arrInitalPreviews = [];
                    $arrInitialPreviewConfigs = [];
                
                if(!empty($model->image)):
                    $txtInitialPreviews = '/Profile/'.$model->id.'/'.$model->image;
              
                    array_push($arrInitalPreviews, $txtInitialPreviews);
                      //echo '<pre>';print_R($arrInitalPreviews);exit;
                    $arrPreviewConfig = ['caption' => $model['image'], 'key' => $model['id']];
                    array_push($arrInitialPreviewConfigs, $arrPreviewConfig);
                else:
                   $txtInitialPreviews = 'res/images/profile.png';
              
                    array_push($arrInitalPreviews, $txtInitialPreviews);
                      //echo '<pre>';print_R($arrInitalPreviews);exit;
                    $arrPreviewConfig = ['caption' => 'Default'];
                    array_push($arrInitialPreviewConfigs, $arrPreviewConfig);
                endif;
                      echo $form->field($model, 'image')->widget(FileInput::classname(), [
              'name' => 'attachments[23]',
              'options' => [
                'multiple' => false,
                'accept' => 'image/*', 
              ],
              'pluginOptions' => [
              'uploadUrl' => Url::to(['/site/file-upload']),
               // 'deleteUrl' => Url::to(['/product/delete-attachment']),
                'initialPreview' => [$txtInitialPreviews],
                'initialPreviewAsData' => true,
               'initialPreviewConfig' => [['caption' => $model['image'], 'key' => $model['id']]],
                'showCaption' => false,
                'showRemove' => false,
                'showUpload' => false,
                'overwriteInitial' => true,
                'allowedFileExtensions' => ['jpg', 'png', 'jpeg'],
              //  'allowedFileTypes' =>  ['image'],
                'dropZoneEnabled' => true,
               // 'dropZoneEnabled'=> false,
                'showBrowse' => true,        
                'browseOnZoneClick' => true,
                'dropZoneClickTitle'=>'',
                'maxFileCount' => 250,
                'browseClass' => 'btn btn-primary btn-block',
                'browseIcon' => '<i class="fa fa-camera"></i>',
                'browseLabel' =>  ' Add image' 
              ],
            ])->label(false);
                    ?>
	</div>
    <div class="row">
        <div class="col-lg-12">
            

                <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder' => 'User Name','class'=>'form-control signup1'])->label(false); ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email','class'=>'form-control signup1'])->label(false); ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password','class'=>'form-control signup1'])->label(false); ?>
            <?php
             
              
                  
            ?>
            <div class="form-group">
                    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'style'=>'margin-top:30px;','name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
            </div>
</div>
<style>
    input:focus{
        outline: 0 !important;
    }
    .signup{
    margin-left: 20%;
    width:100%;
}
.user {
    position: relative;
    margin-right: 30% !important;
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 20px;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
}
.signup1{
    
    border-top: 0 !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    border-left: 0 !important;
    border-right: 0 !important;
    margin-top: 52px !important;

}
.checkbox{
    position: relative;
    display: block;
    margin-top: 50px;
    margin-bottom: 10px;
}
profile-pic {
	position: relative;
	display: inline-block;
}

.profile-pic:hover .edit {
	display: block;
}

.edit {
	padding-top: 277px;	
	padding-right: 625px;
	position: absolute;
	right: 0;
	top: 0;
	display: none;
}

.edit a {
	color: #000;
}
.kv-file-upload{
    display: none;
}
.file-thumbnail-footer{
    display: none;
}
.file-thumbnail-footer {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%);
    }

    .file-thumbnail-footer {
        display: none;
    }

    .file-preview-frame:hover>.file-thumbnail-footer {
        display: block;
    }

    .file-preview-frame:hover>.kv-file-content img {
        opacity: .3;
    }

    .file-preview {
        /* max-height: calc(100vh - 235px); */
        /* overflow-y: auto; */
        padding: 0px;
        border: none;
    }
    .btn-file {
    max-width: 261px;
    margin-top: -76px;
}
.fileinput-remove{
    display: none;
}

    /* .file-caption-main{
    margin-top:10px;
  } */
    .kv-file-content img {
        width: auto !important;
    }
    .file-drop-zone.clickable:hover,.krajee-default.file-preview-frame:not(.file-preview-error):hover,.file-drop-zone.clickable:focus{
        border:none !important;
/*        box-shadow:none !important;*/
    }
    .file-drop-zone.clickable:focus{
        outline:none !important;
    }
   
    .file-upload-indicator {
        display: none;
    }

    .file-drop-zone {
        border: none;
        margin: 0px;
        padding: 5px;
        overflow:hidden;
    }
    .file-drop-zone:hover{
        overflow:auto;
    }
    .file-drop-disabled{
        border: none;
        margin: 0px;
        padding: 5px;
        overflow:auto;
    }

    .file-preview-thumbnails{
        width: max-content;
    }

    



   
    
</style>