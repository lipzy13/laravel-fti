<?php
use Carbon\Carbon;
Carbon::setLocale('id');
?>
@extends('layouts.main')

@section('container')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center">
      <h1>News & Events</h1>
    </div>
    <hr class="hr" />
    <ul class="list-group list-group-flush">
      @foreach ($posts as $post)
      <li class="list-group-item">
        <a href="/berita/{{ $post->slug }}" class="news-link">
          <h2 class="news-title">{{ $post->title }}</h2>
          <p class="news- fw-lighter">{{ Carbon::parse($post->published_at)->translatedFormat('l, j F Y') }}</p>
        </a>
      </li>
      @endforeach
    </ul>
   </div>
@endsection