<?

map('content', 'developer/load_order_graph', 'load_order_graph');
map('content', 'developer/off', 'production_mode');

map_raw('kernel_done', "/^{$app_routing_prefix}(?!api)/", 'kernel_done');
