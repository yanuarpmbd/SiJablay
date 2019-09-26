

    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1">User</a></li>
            <li class=""><a data-toggle="tab" href="#tab-2">Perjalanan Dinas</a></li>
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
        </div>


    </div>

