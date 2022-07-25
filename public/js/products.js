$(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/product",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'Category', name: 'Category'},
            {data: 'description', name: 'Description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});