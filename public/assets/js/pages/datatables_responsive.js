/* ------------------------------------------------------------------------------
*
*  # Responsive extension for Datatables
*
*  Specific JS code additions for datatable_responsive.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{
            orderable: true,
            width: '100px',
            target: 'tr'
        }],
        dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });


    // Basic responsive configuration
    $('.datatable-responsive').DataTable({
      language: {
           search: '<span>Buscar:</span> _INPUT_',
           searchPlaceholder: 'escribe la busqueda...',
           lengthMenu: '<span>Mostrar:</span> _MENU_',
           paginate: { 'first': 'Primera', 'last': 'Ultima', 'next': '&rarr;', 'previous': '&larr;' },
           sEmptyTable:"No hay datos en la tabla",
           sInfo:"Mostrando _START_ de _END_ de _TOTAL_ entradas",
           sInfoEmpty:"Mostrando 0 de 0 de 0 entradas",
           sInfoFiltered:"(Filtradas de _MAX_ totales)",
           sZeroRecords:"No se han encontrado resultados"
      }
   });


    // Column controlled child rows
    $('.datatable-responsive-column-controlled').DataTable({
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [
            {
                className: 'control',
                orderable: false,
                targets:   0
            },
            {
                width: "100px",
                targets: [6]
            },
            {
                orderable: false,
                targets: [6]
            }
        ],
        order: [1, 'asc']
    });


    // Control position
    $('.datatable-responsive-control-right').DataTable({
        responsive: {
            details: {
                type: 'column',
                target: -1
            }
        },
        columnDefs: [
            {
                className: 'control',
                orderable: false,
                targets: -1
            },
            {
                width: "100px",
                targets: [5]
            },
            {
                orderable: false,
                targets: [5]
            }
        ]
    });


    // Whole row as a control
    $('.datatable-responsive-row-control').DataTable({
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [
            {
                className: 'control',
                orderable: false,
                targets:   0
            },
            {
                width: "100px",
                targets: [6]
            },
            {
                orderable: false,
                targets: [6]
            }
        ],
        order: [1, 'asc']
    });



    // External table additions
    // ------------------------------

    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });

});
