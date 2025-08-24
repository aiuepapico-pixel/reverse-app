<?php

use function Livewire\Volt\{state, mount};
state(['word']);
mount(function () {
    $this->upper_word = strtoupper($this->word);
});

?>

<div>
    <h1>元の値</h1>
    <p>{{ $word }}</p>
    <h1>大文字に変換した値</h1>
    <p>{{ $this->upper_word }}</p>
</div>
