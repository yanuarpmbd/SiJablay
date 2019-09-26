<main>
    <div class="col-lg-12">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <li class=""><a data-toggle="tab" href="#tab-1">User</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2">Perjalanan Dinas</a>
                <li class=""><a data-toggle="tab" href="#tab-3">SOP</a></li>
                {{--<li class=""><a data-toggle="tab" href="#tab-4">Rekap Perizinan</a></li>--}}
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        @include('setBidang.content.edit')
                    </div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        @include('setBidang.content.set-no')
                    </div>
                </div>
                <div id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        @include('yanzin.content.set-sop')
                    </div>
                </div>
                {{--<div id="tab-4" class="tab-pane">
                    <div class="panel-body">
                        @include('yanzin.content.showrekap')
                    </div>
                </div>--}}
            </div>


        </div>
    </div>
</main>

