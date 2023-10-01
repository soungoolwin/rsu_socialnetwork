<div>
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
</div>
