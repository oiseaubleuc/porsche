<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Profile of {{ $profile->username }}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $profile->avatar }}" alt="Avatar" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Username:</strong> {{ $profile->username }}</p>
                        <p><strong>Birthday:</strong> {{ $profile->birthday }}</p>
                        <p><strong>About me:</strong> {{ $profile->about_me }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

