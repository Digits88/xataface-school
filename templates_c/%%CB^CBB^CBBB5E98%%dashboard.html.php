<?php /* Smarty version 2.6.18, created on 2015-11-18 13:44:03
         compiled from dashboard.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'use_macro', 'dashboard.html', 1, false),array('block', 'fill_slot', 'dashboard.html', 2, false),)), $this); ?>
<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('fill_slot', array('name' => 'main_column')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <h1>Welcome to the CrestERP Homework Management System </h1>
        
        <p>This system allows you to manage your homework exercises and publish
        them on the web.  Some common actions you may perform with this system
        include:
            <ul>
                <li><img src="<?php echo $this->_tpl_vars['ENV']['DATAFACE_URL']; ?>
/images/add_icon.gif"/>
                    <a href="<?php echo $this->_tpl_vars['ENV']['DATAFACE_SITE_HREF']; ?>
?-table=homework&-action=new">
                        Create New Homework</a>
                </li>
                <li><img src="<?php echo $this->_tpl_vars['ENV']['DATAFACE_URL']; ?>
/images/edit.gif"/> 
                   Edit existing homework: 
                   <select onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option value="">Select ...</option>
                    <?php $_from = $this->_tpl_vars['homework']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['work']):
?>
                        <option value="<?php echo $this->_tpl_vars['homework']->getURL('-action=edit'); ?>
">
                            <?php echo $this->_tpl_vars['homework']->getTitle(); ?>

                        </option>
                    
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                </li>
                <li><img src="<?php echo $this->_tpl_vars['ENV']['DATAFACE_URL']; ?>
/images/file.gif"/> 
                    Embed your bibliography in a webpage:
                    <select onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option value="">Select ...</option>
                    <?php $_from = $this->_tpl_vars['bibliographies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bibliography']):
?>
                        <option value="<?php echo $this->_tpl_vars['bibliography']->getURL('-action=view'); ?>
#embed">
                            <?php echo $this->_tpl_vars['bibliography']->getTitle(); ?>

                        </option>
                    
                <?php endforeach; endif; unset($_from); ?>
                </select>
                </li>
                
            </ul></p>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>