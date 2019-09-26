<main>
    <div class="col-lg-12">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1">Kepala Dinas</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2">PLH Kepala Dinas</a></li>
                <li class=""><a data-toggle="tab" href="#tab-3">Daftar Rekening</a></li>
                <li class=""><a data-toggle="tab" href="#tab-4">User</a></li>
                <li class=""><a data-toggle="tab" href="#tab-5">Perjalanan Dinas</a></li>
                <li class=""><a data-toggle="tab" href="#tab-6">RKO</a></li>
                <li class=""><a data-toggle="tab" href="#tab-7">Target Realisasi RKO</a></li>
                <li class=""><a data-toggle="tab" href="#tab-8">Rekap RKO</a></li>

            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        @include('sekretariat.content.plt')
                    </div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        @include('sekretariat.content.plh')

                    </div>
                </div>
                <div id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        @include('sekretariat.content.add-rek')
                    </div>
                </div>
                <div id="tab-4" class="tab-pane">
                    <div class="panel-body">
                        @include('setBidang.content.edit')
                    </div>
                </div>
                <div id="tab-5" class="tab-pane">
                    <div class="panel-body">
                        @include('setBidang.content.set-no')
                    </div>
                </div>
                <div id="tab-6" class="tab-pane">
                    <div class="panel-body">
                        @include('sekretariat.content.rko')
                    </div>
                </div>
                <div id="tab-7" class="tab-pane">
                    <div class="panel-body">
                        @include('sekretariat.content.target-realisasi-rko')
                    </div>
                </div>
                <div id="tab-8" class="tab-pane">
                    <div class="panel-body">
                        @include('sekretariat.content.rekap-rko')
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>

