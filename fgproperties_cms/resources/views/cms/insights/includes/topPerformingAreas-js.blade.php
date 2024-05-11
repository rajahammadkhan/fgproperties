@php
use App\Models\insight_tables;
 $lol = insight_tables::where('table_name', 'like', 'transaction%')->orderByDesc('created_at')->first();

        $dataArea = DB::connection('web')->table($lol->table_name)->get('area');
        $count = $dataArea->countBy(function ($area) {
            return $area->area;
        });
        $c = $count->sortDesc()->take(5);
        $best_perfrming_areas = [];
        foreach ($c as $key => $value) {
         $best_perfrming_areas[][] = [$key,  $value];
        }
@endphp
<script type="text/javascript">
    $(document).ready(function() {
    
    var table = $('#datatable_top_performing_areas').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('insight.datatable_top_performing_areas') }}",
        "columns": [{
                "data": "id",
                "defaultContent": ""
            },
            {
                "data": "id",
                "defaultContent": ""
            },
            {
                "data": "popularity",
                "defaultContent": ""
            },
            // {
            //     "data": "rank",
            //     "defaultContent": ""
            // },
            // {
            //     "data": "id",
            //     "defaultContent": ""
            // },

             
        ],
        "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            },
            {
                "targets": 0,
                "render": function(data, type, row, meta) {
                    return meta.row + 1;
                },
            },
            {
                "targets": 1,
                "render": function(data, type, row, meta) {
                   // let x = meta.row +1;
                   // let res;
                   // if( x == 1 ){res = '{{ $best_perfrming_areas[0][0][0] }}';}
                   // if( x == 2 ){res = '{{ $best_perfrming_areas[1][0][0] }}';}
                   // if( x == 3 ){res = '{{ $best_perfrming_areas[2][0][0] }}';}
                   // if( x == 4 ){res = '{{ $best_perfrming_areas[3][0][0] }}';}
                   // if( x == 5 ){res = '{{ $best_perfrming_areas[4][0][0] }}';}
                     

                   return ((meta.row == 0 ? '{{ $best_perfrming_areas[0][0][0] }}' : (meta.row == 1 ? '{{ $best_perfrming_areas[1][0][0] }}' : (meta.row == 2 ? '{{ $best_perfrming_areas[2][0][0] }}' : (meta.row == 3 ? '{{ $best_perfrming_areas[3][0][0] }}' : (meta.row == 4 ? '{{ $best_perfrming_areas[4][0][0] }}': null))))));
                    
                    // return meta.row;   
                // return '{{ $best_perfrming_areas[4][0][0] }}';
                },
            },
            {
                "targets": 2,
                "render": function(data, type, row, meta) {
                  
                  return ((meta.row == 0 ? '{{ $best_perfrming_areas[0][0][1] }}' : (meta.row == 1 ? '{{ $best_perfrming_areas[1][0][1] }}' : (meta.row == 2 ? '{{ $best_perfrming_areas[2][0][1] }}' : (meta.row == 3 ? '{{ $best_perfrming_areas[3][0][1] }}' : (meta.row == 4 ? '{{ $best_perfrming_areas[4][0][1] }}': null))))));
                },
            },
            // {
            //   "targets": 1,
            //   "render": function(data, type, row, meta)
            //   {
            //     return `<img src="{{url('')}}/uploads/${data}" width="40px" height="40px">`;
            //   }
            // },
            // {
            //   "targets": 2,
            //   "render": function(data, type, row, meta)
            //   {
            //     return `<img src="{{url('')}}/uploads/${data}" width="40px" height="40px">`;
            //   }
            // },
           
            // {
            //     "targets": 3,
            //     "render": function(data, type, row, meta) {
                  
            //       var checked = row.status == 1 ? 'checked' : null;
            //         return `
            //         <div class="text-center">
            //             <label class="switch s-icons s-outline  s-outline-success  mt-3">
            //               <input class="status" type="checkbox"  ` + checked + ` value="` + row.id + `">
            //               <span class="slider round"></span>
            //             </label>
            //         </div>
            //         `;
            //     },
            // },
            // {
            //     "targets": 3,
            //     "render": function(data, type, row, meta) {

            //         var edit = "{{ route('insight.edit_top_performing_areas', [':id']) }}";
            //         edit = edit.replace(':id', data);


            //         return `<div class="text-center">
            //                 <a href="` + edit + `"  data-toggle="tooltip" data-placement="top" title="Edit">
            //                 <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 text-black"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            //               </a>
                          
            //               <a href="javascript:void(0);" class="delete" data-toggle="tooltip" data-placement="top" title="Delete" data-id="`+ data + `">
            //                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger">
            //                 <circle cx="12" cy="12" r="10"></circle>
            //                 <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            //               </a></div>`;
            //     },
            // },
        ],
        "drawCallback": function(settings) {

        $('.delete').click(function () {
          var deleteId = $(this).data('id');
          var $this = $(this);

          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fa7f3',
            cancelButtonColor: '#d57171',
            confirmButtonText: 'Yes, delete it!'
          }).then(function (result) {
            if (result.value) {
            axios
              .post('{{route("insight.destroy_top_performing_areas")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deleteId: deleteId,
              })
              .then(function (response) {

                swal(
                  'Deleted!',
                  'Data has been deleted.',
                  'success'
                )

                table.draw();
              })
              .catch(function (error) {
                console.log(error);
                swal(
                  'Failed!',
                  error.response.data.error,
                  'error'
                )
              });
            }
          })
        });
      },
        //scrollX:true,
    });
    
    });
    
    </script>