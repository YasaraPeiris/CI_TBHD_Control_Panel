<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Set default parameters
|--------------------------------------------------------------------------
|
| Parameters are self explanatory
| Please change them accordingly to the needs of your project
|
*/

// Reserver 100Mb for running
ini_set("memory_limit","100M");

// Allow a good time for long reports to run. Set to 0 to allow unlimited time
ini_set("max_execution_time","90");


//
//$config['email_recipients']=false;
//$config['forward_url_get_parameters'] = "";
//$config['forward_url_get_parameters_graph'] = "";
//$config['forward_url_get_parameters_dbimage'] = "";
//$config['reportico_ajax_script_url']=false;
//$config['reportico_ajax_called']=false;
//$config['reportico_ajax_mode']=true;
//$config['reportico_ajax_preloaded']=false;
//$config['clear_reportico_session']=false;
//
//$config['target_show_graph']=false;
//$config['target_show_detail']=false;
//$config['target_show_group_headers']=false;
//$config['target_show_group_trailers']=false;
//$config['target_show_column_headers']=false;
//$config['target_show_criteria']=false;

$config['show_form_panel']=false;

$config['framework_parent']= "ci";

$config['projects_folder'] = "projects";
$config['admin_projects_folder'] = "projects";
$config['templates_folder'] = "views/reportico";
$config['compiled_templates_folder'] = "cache";

$config['url_path_to_assets']=  '/public';

$config['bootstrap_styles']= "3";
$config['bootstrap_preloaded']= false;

// Admin or normal login
$config['login_type'] = "NORMAL";

// Output control
$config['output_skipline'] = false;
$config['output_allcell_styles'] = false;
$config['output_criteria_styles'] = false;
$config['output_header_styles'] = false;
$config['output_hyperlinks'] = false;
$config['output_images'] = false;
$config['output_row_styles'] = false;
$config['output_page_styles'] = false;
$config['output_before_form_row_styles'] = false;
$config['output_after_form_row_styles'] = false;
$config['output_group_header_styles'] = false;
$config['output_group_header_label_styles'] = false;
$config['output_group_header_value_styles'] = false;
$config['output_group_trailer_styles'] = false;
$config['output_reportbody_styles'] = false;
$config['admin_accessible'] = true;


// Template Parameters
$config['output_template_parameters'] = array(
    "show_hide_navigation_menu" => "show",
    "show_hide_dropdown_menu" => "show",
    "show_hide_report_output_title" => "show",
    "show_hide_prepare_section_boxes" => "show",
    "show_hide_prepare_pdf_button" => "show",
    "show_hide_prepare_html_button" => "show",
    "show_hide_prepare_print_html_button" => "show",
    "show_hide_prepare_csv_button" => "show",
    "show_hide_prepare_page_style" => "show",
);
// Template Parameters

// Charsets for in and output
$config['db_charset'] = false;
$config['output_charset'] = false;

// Currently edited links to other reports
$config['reportlink_report'] = false;
$config['reportlink_report_item'] = false;
$config['reportlink_or_import'] = false;

// Three parameters which can be set from a calling script
// which can be incorporated into reportic queries
// For example a calling framework username can
// be passed so that data can be returned for that
// user
$config['external_user'] = false;
$config['external_param1'] = false;
$config['external_param2'] = false;
$config['external_param3'] = false;

// Initial settings to set default project, report, execute mode. Set by
// application frameworks embedding reportico
$config['initial_project'] = false;
$config['initial_execute_mode'] = false;
$config['initial_report'] = false;
$config['initial_project_password'] = false;
$config['initial_output_format'] = false;
$config['initial_output_style'] = false;
$config['initial_show_detail'] = false;
$config['initial_show_graph'] = false;
$config['initial_show_group_headers'] = false;
$config['initial_show_group_trailers'] = false;
$config['initial_show_column_headers'] = false;
$config['initial_show_criteria'] = false;
$config['initial_execution_parameters'] = false;
$config['initial_sql'] = false;

// Access mode - one of FULL, ALLPROJECTS, ONEPROJECT, REPORTOUTPUT
$config['access_mode'] = "FULL";

// Whether to show refresh button on report output
$config['show_refresh_button'] = false;

// Whether to show print button on report output
$config['show_print_button'] = true;

// Session namespace to use
$config['session_namespace'] = false;

// Whether to perform drill downs in their own namespace (normally from embedding in frameworks
// where reportico namespaces are used within the framework session
$config['drilldown_namespace'] = false;

// URL Path to Reportico folder
$config['reportico_url_path'] = false;

// Path to Reportico runner for AJAX use or standalone mode
$config['url_path_to_reportico_runner'] = false;

// Path to frameworks public folder
$config['url_path_to_assets'] =  "public";

// Path to public reportico site for help
$config['url_doc_site'] = "http://www.reportico.org/documentation/";

// Path to public reportico site
$config['url_site'] = "http://www.reportico.org/";

// Path to calling script for form actions
// In standalone mode will be the reportico runner, otherwise the
// script in which reportico is embedded
$config['url_path_to_calling_script'] = false;

// external user parameters as specified in sql as {USER_PARAM,your_parameter_name}
// set with $q->user_parameters["your_parameter_name"]'] = "value";
$config['user_parameters'] = array();

// Specify a pdo connection fexternally
$config['external_connection'] = false;

$config['bootstrap_styles'] = "3";
$config['jquery_preloaded'] = false;
$config['bootstrap_preloaded'] = false;
$config['bootstrap_styling_page'] = "table table-striped table-condensed";
$config['bootstrap_styling_button_go'] = "btn btn-success";
$config['bootstrap_styling_button_reset'] = "btn btn-default";
$config['bootstrap_styling_button_admin'] = "btn";
$config['bootstrap_styling_button_delete'] = "btn btn-danger";
$config['bootstrap_styling_dropdown'] = "form-control";
//$config['bootstrap_styling_checkbox_button'] = "btn btn-default btn-xs";
$config['bootstrap_styling_checkbox_button'] = "checkbox-inline";
$config['bootstrap_styling_checkbox'] = "checkbox";
$config['bootstrap_styling_toolbar_button'] = "btn";
$config['bootstrap_styling_htabs'] = "nav nav-justified nav-tabs nav-tabs-justified ";
$config['bootstrap_styling_vtabs'] = "nav nav-tabs nav-stacked";
$config['bootstrap_styling_design_dropdown'] = "form-control";
$config['bootstrap_styling_textfield'] = "form-control";
$config['bootstrap_styling_design_ok'] = "btn btn-success";
$config['bootstrap_styling_menu_table'] = "table";
$config['bootstrap_styling_small_button'] = "btn btn-sm btn-default";

// Dynamic grids
$config['dynamic_grids'] = false;
$config['dynamic_grids_sortable'] = true;
$config['dynamic_grids_searchable'] = true;
$config['dynamic_grids_paging'] = false;
$config['dynamic_grids_page_size'] = 10;

// Dynamic grids
$config['parent_reportico'] = false;