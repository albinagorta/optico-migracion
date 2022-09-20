dhtmlXForm.prototype.items.ckeditor = {
	
	render: function(item, data) {
		
		item._type = "ckeditor";
		item._enabled = true;
		item._ckId = "ckeditor_"+window.dhx4.newId();
		
		this.doAddLabel(item, data);
		this.doAddInput(item, data, "TEXTAREA", null, true, true, "dhxform_textarea");
		
		item.childNodes[item._ll?1:0].childNodes[0].rows = (Number(data.rows)||5)+(window.dhx4.isIE6?1:0);
		item.childNodes[item._ll?1:0].childNodes[0].id = item._ckId;
		
		CKEDITOR.replace(item._ckId, {
			width: data.inputWidth||"auto",
			height: data.inputHeight||"auto"
		});
		
		CKEDITOR.instances[item._ckId].on("blur", function(){
			var v = CKEDITOR.instances[item._ckId].getData();
			if (!item._unloading && v != item._value) {
				item._value = v;
				item.getForm().callEvent("onChange", [item._idd, item._value]);
			}
		});
		
		this.setValue(item, data.value);
		
		return this;
	},
	
	setValue: function(item, value) {
		CKEDITOR.instances[item._ckId].setData(value);
		item._value = value;
	},
	
	getValue: function(item) {
		item._value = CKEDITOR.instances[item._ckId].getData();
		return item._value;
	},
	
	destruct: function(item) {
		item._unloading = true;
		CKEDITOR.instances[item._ckId].destroy();
		this.d2(item);
		item = null;
	},
	
	enable: function(item) {
		item._is_enabled = true;
	},
	
	disable: function(item) {
		item._is_enabled = false;
	},
	
	setFocus: function() {
		CKEDITOR.document.getById(item._ckId).focus();
	}
};

(function(){
	for (var a in {doAddLabel:1,doAddInput:1,setText:1,getText:1,isEnabled:1,doUnloadNestedLists:1})
		dhtmlXForm.prototype.items.ckeditor[a] = dhtmlXForm.prototype.items.input[a];
})();

dhtmlXForm.prototype.items.ckeditor.d2 = dhtmlXForm.prototype.items.input.destruct;

dhtmlXForm.prototype.setFormData_ckeditor = function(name, value) {
	return this.doWithItem(name, "setValue", value);
};

dhtmlXForm.prototype.getFormData_ckeditor = function(name) {
	return this.doWithItem(name, "getValue");
};
