<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="{{ asset('template/admin/metronic4.5.6/apps/css/inbox.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/apps/css/ticket.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/apps/css/todo.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/apps/css/todo-2.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('template/admin/metronic4.5.6/global/css/plugins-md.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap/css/bootstrap.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-colorpicker/css/colorpicker.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-editable/inputs-ext/address/address.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-summernote/summernote.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-table/bootstrap-table.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-toastr/toastr.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-touchspin/bootstrap.touchspin.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/clockface/css/clockface.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/codemirror/lib/codemirror.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/codemirror/theme/ambiance.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/codemirror/theme/material.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/codemirror/theme/neat.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/codemirror/theme/neo.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/cubeportfolio/css/cubeportfolio.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/datatables/datatables.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/dropzone/basic.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/dropzone/dropzone.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/fancybox/source/jquery.fancybox.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/font-awesome/css/font-awesome.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/fullcalendar/fullcalendar.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/icheck/skins/all.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/ion.rangeslider/css/ion.rangeSlider.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/ion.rangeslider/css/ion.rangeSlider.skinFlat.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jcrop/css/jquery.Jcrop.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-minicolors/jquery.minicolors.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-multi-select/css/multi-select.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-nestable/jquery.nestable.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jquery-notific8/jquery.notific8.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jqvmap/jqvmap/jqvmap.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/jstree/dist/themes/default/style.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/ladda/ladda-themeless.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/morris/morris.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/nouislider/nouislider.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/nouislider/nouislider.pips.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/pace/themes/pace-theme-big-counter.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/pace/themes/pace-theme-flash.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/select2/css/select2.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/select2/css/select2-bootstrap.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/simple-line-icons/simple-line-icons.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/socicon/socicon.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/global/plugins/typeahead/typeahead.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/layouts/layout/css/custom.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/layouts/layout/css/layout.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/layouts/layout/css/themes/darkblue.min.css') }}" />
    <link href="{{ asset('template/admin/metronic4.5.6/layouts/layout/css/themes/darkblue.min.css') }}"  id="style_color" />
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/about.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/blog.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/coming-soon.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/contact.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/error.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/faq.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/image-crop.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/invoice.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/invoice-2.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/lock.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/lock-2.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/login.min.css') }}"/>
    {{-- <link href="{{ asset('template/admin/metronic4.5.6/pages/css/login-2.min.css') }}"/> --}}
    {{-- <link href="{{ asset('template/admin/metronic4.5.6/pages/css/login-3.min.css') }}"/> --}}
    {{-- <link href="{{ asset('template/admin/metronic4.5.6/pages/css/login-4.min.css') }}"/> --}}
    {{-- <link href="{{ asset('template/admin/metronic4.5.6/pages/css/login-5.min.css') }}"/> --}}
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/portfolio.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/pricing.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/pricing-2.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/profile.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/profile-2.min.css') }}"/>
    <link href="{{ asset('template/admin/metronic4.5.6/pages/css/search.min.css') }}"/>
</head>
<!-- END HEAD -->