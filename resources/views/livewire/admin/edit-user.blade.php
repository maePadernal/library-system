<div>
    <form wire:submit="save">

        <flux:field>
            <flux:label>Name</flux:label>
            <flux:input wire:model="name"/>
            <flux:error name="name" />
        </flux:field>

        <flux:field>
            <flux:label>Email</flux:label>
            <flux:input wire:model="email"/>
            <flux:error name="email" />

        </flux:field>

        <flux:field>
            <flux:label>Password</flux:label>
            <flux:input wire:model="password"/>
            <flux:error name="password" />

        </flux:field>
        <flux:button type="submit">Save</flux:button>
    </form>
   <flux:modal name="success">
    SUccess
  </flux:modal>
</div>
