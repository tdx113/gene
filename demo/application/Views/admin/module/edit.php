<form class="layui-form" action="" lay-filter="geneForm">
    <input type="hidden" name="id" value="<?php echo $this->module['module_id'];?>" >
  <div class="layui-form-item">
    <label class="layui-form-label">所属栏目</label>
    <div class="layui-input-block">
      <select name="data[module_pid]" lay-verify="required">
        <option value="0">根栏目</option>
        <?php foreach($this->moduleList['list'] as $one): ?>
        <?php if($one['module_id'] != $this->module['module_id']): ?>
        <option value="<?php echo $one['module_id']?>"><?php echo str_repeat("&nbsp;", $one['deep'] * 8). '|-' . $one['module_title']?></option>
        <?php endif;?>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">栏目名称</label>
    <div class="layui-input-block">
      <input type="text" name="data[module_title]" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">图标</label>
    <div class="layui-input-inline">
      <input type="text" name="data[module_icon]" required lay-verify="" placeholder="请输入图标" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">图标样式名</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">路由地址</label>
    <div class="layui-input-inline">
      <input type="text" name="data[module_url]" required lay-verify="" placeholder="请输入路由地址" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">图标样式名</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">状态</label>
    <div class="layui-input-block">
      <input type="checkbox" name="data[status]" lay-skin="switch">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="geneForm" data-url="/module/editPost">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
<script>
initForm('geneForm', {
    "data[module_title]": "<?php echo $this->module['module_title'];?>"
    ,"data[module_pid]": "<?php echo $this->module['module_pid'];?>"
    ,"data[module_icon]": "<?php echo $this->module['module_icon'];?>"
    ,"data[module_url]": "<?php echo $this->module['module_url'];?>"
    ,"data[status]": <?php echo $this->module['status'];?>
});
</script>