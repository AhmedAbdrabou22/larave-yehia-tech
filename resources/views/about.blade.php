<x-layout :title="$pageTitle">
    <h1>Hellloooo Abbbbouttt</h1>
    {{ request()->is('about') ? "Yaaaaaa":"Nooooo" }}
</x-layout>
