<section class="page-title" style="background-image: url('{{ asset('assets/images/zyro-image (1).webp') }}') ">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>{{ $pageName }}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('index.html') }}">Home</a></li>
                    @isset($pageCategory)
                        <li>{{ $pageCategory }}</li>
                    @endisset
                    <li>{{ $pageName }}</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
