<div>
    <form wire:submit= "save">
        <flux:field>
            <flux:label>Name</flux:label>
            <flux:input wire:model="name" />
            <flux:error name="name" />
        </flux:field>

        <flux:field>
            <flux:label>Author</flux:label>
            <flux:input wire:model="author" />
            <flux:error name="author" />
        </flux:field>

        <flux:field>
            <flux:label>Stock</flux:label>
            <flux:input wire:model="stocks" />
            <flux:error name="stocks" />
        </flux:field>
        <flux:button type="submit">Save</flux:button>


    </form>
    <flux:modal name="success">
        SUccess
    </flux:modal>
</div>
