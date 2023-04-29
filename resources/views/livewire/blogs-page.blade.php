<div>
    <livewire:components.header />
    <livewire:components.page-start title="Blogs" />
    <main class="container p-6">
        @foreach ($blogs as $blog)
            <livewire:components.card :blog="$blog" />
        @endforeach
    </main>
    <livewire:components.footer />
</div>
