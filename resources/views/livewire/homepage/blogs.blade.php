<div class="recent-causes-part paddingub">
    <div class="container">
        <div class="causes-content text-center flex flex-col align-items-center">
            <h2 class="section-title">Blogs</h2>
            <p class="section-detail w-3/5">Read our blogs and learn more about dialysis, kidney health, nutrition,
                lifestyle
                and more. Our blogs are written by experts and patients who share their insights and experiences with
                you.</p>
        </div>
        <div class="grid xl:grid-cols-3 place-items-center gap-3">
            @foreach ($blogs as $blog)
                <livewire:components.card :blog="$blog" />
            @endforeach
        </div>
    </div>
</div>
