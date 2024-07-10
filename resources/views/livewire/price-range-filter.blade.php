<div>
    <form wire:submit="$refresh">
        <input wire:model="minPrice"/>
        <input wire:model="maxPrice"/>
        <button type="submit">Update Price Range</button>
    </form>

    Price Range: {{ $minPrice }} - {{ $maxPrice }}
</div>
