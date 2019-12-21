<nav class="sidebar-nav">
    <ul class="metismenu" id="menu1">
        <li class="text-primary font-weight-bold">
            <div>
                <span class="fa fa-fw fa-square"></span> States
            </div>
        </li>
        <li class="mm-active">
            <a href="{{url('maintenance/state/create')}}">
                <span class="fa fa-fw fa-plus"></span> Add
            </a>
        </li>
        <li>
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
                    <a data-toggle="modal" href="#findClassCode">
                        <span class="fa fa-fw fa-search"></span> Abbreviation
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#findDescription">
                        <span class="fa fa-fw fa-search"></span> Full Name
                    </a>
                </li>
                <li>
                    <a href="{{url("maintenance/state/setsearch")}}">
                        <span class="fa fa-fw fa-undo"></span> Reset
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-sort"></span> Sort
            </a>
            <ul class="metismenu">
                <li>
                    <a href="/maintenance/state/sortorder/1">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/state/sortorder/2">
                        <span class="fa fa-fw fa-sort"></span> Abbreviation
                    </a>
                </li>
                <li>
                    <a href="/maintenance/state/sortorder/3">
                        <span class="fa fa-fw fa-sort"></span> Full Name
                    </a>
                </li>
                <li>
                    <a href="/maintenance/state/sortorder/4">
                        <span class="fa fa-fw fa-sort"></span> Last Updated
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-print"></span> Print
            </a>
            <ul class="metismenu">
                <li>
                    <a href="/maintenance/state/printall/id" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/state/printall/state_abbrev" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Abbreviation
                    </a>
                </li>
                <li>
                    <a href="/maintenance/state/printall/state_full" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Full Name
                    </a>
                </li>
                <li>
                    <a href="/maintenance/state/printall/lastupdated" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Last Updated
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<!-- findId Modal -->
<div class="modal fade" tabindex="-1" id="findId" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/state/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A State Id</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                placeholder="Enter A State Id"
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

<!-- findClassCode Modal -->
<div class="modal fade" tabindex="-1" id="findClassCode" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/state/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A State Abbreviation</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="state_abbrev"
                                maxlength="2"
                                placeholder="Enter A State Abbreviation"
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
            <form method="GET" action="{{url("maintenance/state/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A State Full Name</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="state_full"
                                placeholder="Enter A State Full Name"
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
