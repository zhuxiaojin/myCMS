    <div class="col-6">
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-new thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{asset('assets/images/small/img-1.jpg')}}" alt="image"/>
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail"
                 style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
            <div>
                <button type="button" class="btn btn-info btn-file">
                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                    <span class="fileupload-exists"><i
                                class="fa fa-undo"></i> 切换</span>
                    <input type="file" class="btn-light"/>
                </button>
                <a href="#" class="btn btn-danger fileupload-exists"
                   data-dismiss="fileupload"><i class="fa fa-trash"></i> 删除</a>
            </div>
        </div>
    </div>
