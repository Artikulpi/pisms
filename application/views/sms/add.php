<script type="text/javascript">
$(document).ready(function() {
    $('#karakter').keyup(function() {
        var len = this.value.length;
        if (len >= 160) {
            this.value = this.value.substring(0, 160);
        }
        $('#hitung').text(160 - len);
    });
});
</script>
<div class="box">
    <?php
    echo form_open('sms/create');
    ?>
    <div class="control-group">
        <?php echo validation_errors(); ?>
        <Label>Pesan Anda</Label>
        <textarea id="karakter" style="width: 300px"  name="content"  class="form-control" maxlength="160" rows="5"></textarea>
        <div style="width:264px;text-align: center" class="alert alert-danger"><span id="hitung">160</span> Karakter Tersisa.</div>
    </div>        
    <label>Kirim Berdasarkan :</label>

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <label>
                        <input type="radio" name="optionsRadios" value="kontak" data-toggle="collapse" data-parent="#accordion"  id="optionsRadios1"  data-target="#wilayah">
                        Kontak
                    </label>
                </h4>
            </div>
            <div id="wilayah" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="control-group">
                        <input type="text" name="fromcontact">
                    </div>
                </div>
                <div class="control-group">
                    <span>&nbsp;</span>
                    <a href="<?php echo site_url('message'); ?>" class="btn">Cancel</a>

                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <label>
                    <input type="radio" name="optionsRadios" value="fromgroup" data-toggle="collapse" data-parent="#accordion" id="optionsRadios2" data-target="#partai"   >
                    Group
                </label>
            </h4>
        </div>
        <div id="partai" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="control-group">
                    <?php
                    if (!empty($group)) {
                        foreach ($group as $row):
                            ?>
                        <input type="checkbox" value="<?php echo $row->id; ?>" name="groupcheck[]"> <?php echo $row->group_name; ?>

                        <?php
                        endforeach;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <label>
                    <input type="radio" name="optionsRadios" value="frominput" data-toggle="collapse" data-parent="#accordion" id="optionsRadios3" data-target="#phone">
                    Menggunakan No. Telp
                </label>
            </h4>
        </div>
        <div id="phone" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="control-group">
                    <label><b>Nomor Telepon Tujuan :</b></label>
                    <div class="control-group">
                        <input  type="text" maxlength="12" name="no_tujuan" placeholder="No.Telp Tujuan">
                    </div>
                    <div class="control-group">
                        <span>&nbsp;</span>
                        <a href="<?php echo site_url('message'); ?>" class="btn">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<input type="submit" class="btn btn-primary" value="Kirim">
<?php
form_close();
?>