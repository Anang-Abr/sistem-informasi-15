@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <main>
        <section class="accountSettings">
            <h1 class="accountSettings__title">Account Settings</h1>
            <div class="accountSettings__content">
            <div class="accountSettings__profilePicture">
                <img src="" alt="">
            </div>
            <div class="accountSettings__profileData">
                <form action="" class="accountSettings__form">
                    <div class="accountSettings__formElement">
                        <label for="name" class="accountSettings__formLabel">Name</label>
                        <span class="accountSettings__formColon">:</span>
                        <input type="text" name="name" id="name" class="accountSettings__formTextInput">
                    </div>
                    <div class="accountSettings__formElement">
                        <label for="name" class="accountSettings__formLabel">Gender</label>
                        <span class="accountSettings__formColon">:</span>
                        <select name="gender" class="accountSettings__formTextInput" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="none">Prefer Not To Say</option>
                        </select>
                    </div>
                    <div class="accountSettings__formElement">
                        <label for="name" class="accountSettings__formLabel">Date Of Birth</label>
                        <span class="accountSettings__formColon">:</span>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="accountSettings__formTextInput">
                    </div>
                    <div class="accountSettings__formElement">
                        <label for="name" class="accountSettings__formLabel">Account Info Visability</label>
                        <span class="accountSettings__formColon">:</span>
                        <div class="accountSettings__formElement__radio">
                            <input type="radio" name="isPublic" id="public" value="true" checked>
                            <label for="public">Public</label>
                            <input type="radio" name="isPublic" id="private" value="false">
                            <label for="private">Private</label>
                        </div>
                    </div>
                    <div class="accountSettings__formElement">
                        <label for="myeditorinstance" class="accountSettings__formLabel">Account Description</label>   
                        <span class="accountSettings__formColon">:</span>
                    </div>
                    <div class="accountSettings__formDescription">
                        <x-forms.tinymce-editor/>
                    </div>
                    <div class="accountSettings__formCheck">
                        <input type="checkbox" id="share" name="isShare" value="true">
                        <label for="share">Share My Activity To Feeds</label>
                    </div>
                    <div class="accountSettings__Button__container">
                        <input class="accountSettings__Button" type="submit" value="Save">
                    </div>
                </form>
            </div>
            </div>
        </section>
    </main>
@endsection