<div class="card card-primary">
    <div class="card-header">รายการอุปกรณ์</div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="form-group form-inline col-md-4">
                    <div class="col-md-4"><label>รหัสเครื่อง</label></div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask="" data-mask="" im-insert="true">
                        </div>
                    </div>
                </div>
                <div class="form-group form-inline col-md-3">
                    <div class="col-md-3"><label>แผนก</label></div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>                                                              
                            <!--<input type="text" class="form-control" data-inputmask="" data-mask="" im-insert="true">-->
                            <select class="form-control">
                                <option value="" hidden>เลือกแผนก</option>
                                <?php         
                                    $Processing = new Processing();

                                    $sql = "{call GetDepartmentView}";

                                    $array = $Processing->FetchData($sql);

                                    foreach($array as $row){
                                        print "<option value='".$row["DepID"]."'>".$row["DepName"]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group form-inline col-md-3">
                    <div class="col-md-3"><label>ชั้น</label></div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>                                                              
                            <!--<input type="text" class="form-control" data-inputmask="" data-mask="" im-insert="true">-->
                            <select class="form-control">
                                <?php
                                    $floormax = 10;
                                    for($i = 0 ; $i <= $floormax ; $i++){
                                    ?>
                                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"><input type="button" class="form-control btn-primary" value="Search" onclick="SearchData()"></div>
            </div>
            <div class="row">
                
                
            </div>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
<div id="equipmentdetail" style="visibility: hidden;">
<div class="card card-success">
    <div class="card-header">ข้อมูลอุปกรณ์</div>
    <div class="card-body">
    </div>
    <div class="card-footer">
    </div>
</div>
</div>

