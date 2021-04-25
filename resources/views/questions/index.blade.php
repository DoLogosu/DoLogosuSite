@extends('layouts.app')
@section('title','Запитання')
@section('content')



<style>
    .form-question {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-question .checkbox {
        font-weight: 400;
    }

    .form-question .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-question .form-control:focus {
        z-index: 2;
    }
</style>
<script>
    document.getElementById("navQuestions").classList.add('active');
</script>


<main class="form-question " style="margin-bottom: 130px;">
    <form>
        <div class="signal-section">
            <div class="item">
                <div class="signal-form-container">
                    <div class="title-form h3">Звернення:</div>
                    <div class="form-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Пошта" required="" autofocus="">
                    </div>
                    <div class="body-form">
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                            <div class="form-group">
                                <select class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="idProblem" name="idProblem">
                                    <option disabled="" value="">Выберите тип сигнала</option>
                                    <option value="1"> Запитання </option>
                                    <option value="2"> Пропозиція </option>
                                    <option value="3"> Скарга </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="theme" name="theme" type="text" placeholder="Тема" required="" autofocus="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="message" name="message" placeholder="Сообщение" required="" autofocus=""></textarea>
                            </div>
                            <div class="form-group submit">
                                <div class="button-block">
                                    <button class="btn btn-primary btn-signal-send"> Отправить </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>

<?php

function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo 'Your Real IP - ' . getUserIpAddr();


?>
@endsection
