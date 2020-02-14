var $table = $('#table-bootstrap');

function viewFormatter(value, row, index){
	return [
		'<a href="'+ $baseUrl + '/' + row.id + '" title="Ver portaria" class="btn btn-sm btn-primary">',
			'<i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ver</span>',
		'</a>'
    ].join('');
}

function linkFormatter(value, row, index){
	if (value != null) {
		value = JSON.parse(value);
		var resposta = [];
		$.each(value, function(index, item){
			$url = $baseStorageUrl.replace('__file', item.download_link);
			$nome = item.original_name;
			resposta.push([
				'<a title="Ver arquivo" href="'+ $url + '" target="_Blank">',
					$nome,
				'</a> <br />'
			].join(''));
		});
		return resposta.join('');
	}
	return '';
}

function statusFormatter(value, row, index){
	return value.descricao;
}

function dateFormat(value, row, index) {
	if (value === null) {
		return '-';
	}
	var date = new Date(value);

	return date.toLocaleDateString();
 }

function membrosFormatter(value, row, index){
	if (value != null && value.length > 0) {
		resposta = [];
		$.each(value, function(index, item){
			resposta.push([
				'<p><i class="voyager-person"></i> <span class="hidden-xs hidden-sm">' + item.nome + '</span></p>'
			].join(''));
		});
		return resposta.join('');
	}
	return '';
}

function restritoFormatter(value, row, index){
	if (value) {
		return '<span class="label label-info">Sim</span>';
	}else{
		return '<span class="label label-primary">Não</span>';
	}
}

function operateFormatter(value, row, index) {
    return [
        '<a title="Editar" class="btn btn-sm btn-warning edit" href="'+ $baseUrl + '/' + row.id + '/edit' + '">',
			'<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>',
        '</a>',
        '<a title="Excluir" class="btn btn-sm btn-danger remove" href="javascript:void(0)">',
			'<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Excluir</span>',
        '</a>'
    ].join('');
}

$(document).ready(function() {
    window.operateEvents = {
        'click .edit': function(e, value, row, index) {
            // message(value, row, index);
        },
        'click .remove': function(e, value, row, index) {
            // console.log($formActionUrl.replace('__id', row.id));
			$('#delete_form')[0].action = $formActionUrl.replace('__id', row.id);
			$('#delete_modal').modal('show');
        }
    };
    $table.bootstrapTable({
        toolbar: ".toolbar",
        clickToSelect: false,
        showRefresh: true,
        search: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        searchAlign: 'left',
        pageSize: 10,
        pageList: [8, 10, 25, 50, 100],
        icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
    });

    $(window).resize(function() {
        $table.bootstrapTable('resetView');
    });
});
