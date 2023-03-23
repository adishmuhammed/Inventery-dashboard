<!DOCTYPE html>
<html lang="en">
<head>
    @include('common.meta', [
        'title' => 'Sahayi Dialysis Center',
        'metaDescribtion' =>
            'Sahayi Dialysis Center is a diaplsy center in medical collage helpping people to get better health.',
    ])
</head>
<body>
    <div class="page-wrapper">
        @include('common.preloader')
        @include('common.navigation')
        @include('common.page_start', [
            'pageName' => 'Sahayi Dialysis Center',
            'pageCategory' => 'Services',
        ])

        <main>

        </main>
        
        @include('common.footer')
    </div>
    @include('common.scripts')
</body>
</html>
