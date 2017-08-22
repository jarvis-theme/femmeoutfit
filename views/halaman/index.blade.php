<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
            <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>{{ ucwords($data->judul) }}</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">{{ ucwords($data->judul) }}</span></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div class="pageContainer">
            <h1 class="bingoPageTitle">{{ ucwords($data->judul) }}</h1>
            <div class="pageContent pageAboutUs">
                <div class="rte">
                    <h2>{{ strtoupper($data->judul) }}</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="aboutusText">
                                {{ $data->isi }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>