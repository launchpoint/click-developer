<?

global $developer_events, $developer_event_times;

$event_data = event('developer_errors');
$error_messages = array();
foreach($event_data as $module_name=>$data_vars)
{
  if (!array_key_exists('errors', $data_vars)) continue;
  $error_messages = array_merge($error_messages, $data_vars['errors']);
}

