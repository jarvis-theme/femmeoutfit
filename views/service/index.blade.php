<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
            <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>Term of Service</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">Term of Service</span></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div class="pageContainer faqPageContainer">
            <div id="section-bingo-template-faq">
                <div class="faqPageWrapper">
                    <div id="term-of-services" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#term-of-services" href="#tos" aria-expanded="true">
                                        Term of Service
                                    </a>
                                </h4>
                            </div>
                            <div id="tos" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="faq-item--content">
                                    {{ $service->tos }}
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#term-of-services" href="#refund" aria-expanded="false">
                                        Refund
                                    </a>
                                </h4>
                            </div>
                            <div id="refund" class="panel-collapse collapse" aria-expanded="false">
                                <div class="faq-item--content">
                                    {{ $service->refund }}
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#term-of-services" href="#privacy" aria-expanded="false">
                                        Privacy
                                    </a>
                                </h4>
                            </div>
                            <div id="privacy" class="panel-collapse collapse" aria-expanded="false">
                                <div class="faq-item--content">
                                    {{ $service->privacy }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>