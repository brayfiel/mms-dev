<nav class="sidebar-nav">
    <ul class="metismenu" id="menu1">
        <li class="text-primary font-weight-bold">
            <div>
                <span class="fa fa-fw fa-square"></span> Miscellaneous Configuration
            </div>
        </li>
        {{-- <li class="mm-active">
            <a href="{{url('maintenance/organization/create')}}">
                <span class="fa fa-fw fa-plus"></span> Add
            </a>
        </li> --}}
        {{-- <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-search"></span> Find
            </a>
            <ul>
                <li>
                    <a data-toggle="modal" href="#findId">
                        <span class="fa fa-fw fa-search"></span> Id
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#findDescription">
                        <span class="fa fa-fw fa-search"></span> Description
                    </a>
                </li>
                <li>
                    <a href="{{url("maintenance/organization/setsearch")}}">
                        <span class="fa fa-fw fa-undo"></span> Reset
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-sort"></span> Sort
            </a>
            <ul class="metismenu">
                <li>
                    <a href="/maintenance/organization/sortorder/1">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/organization/sortorder/3">
                        <span class="fa fa-fw fa-sort"></span> Description
                    </a>
                </li>
                <li>
                    <a href="/maintenance/organization/sortorder/4">
                        <span class="fa fa-fw fa-sort"></span> Last Updated
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="mm-active">
            <a href="/maintenance/misc/printall" target="_blank">
                <span class="fa fa-fw fa-print"></span> Print
            </a>
        </li>
        {{-- <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-print"></span> Print
            </a>
            <ul class="metismenu">
                <li>
                    <a href="/maintenance/organization/printall/id" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/organization/printall/description" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Description
                    </a>
                </li>
                <li>
                    <a href="/maintenance/organization/printall/lastupdated" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Last Updated
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>

<!-- findId Modal -->
<div class="modal fade" tabindex="-1" id="findId" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/organization/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find An Organization Code Id</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                placeholder="Enter An Organization Name"
                                min="1"
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Find">
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- findDescription Modal -->
<div class="modal fade" tabindex="-1" id="findDescription" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/organization/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find An Organization Description</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="description"
                                placeholder="Enter An Organization Description"
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Find">
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
