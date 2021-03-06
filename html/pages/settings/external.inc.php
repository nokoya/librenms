<?php

$no_refresh = true;

$config_groups = get_config_by_group('external');

$oxidized_conf = array(
    array('name'               => 'oxidized.enabled',
          'descr'              => 'Enable Oxidized support',
          'type'               => 'checkbox',
    ),
    array('name'               => 'oxidized.url',
          'descr'              => 'URL to your Oxidized API',
          'type'               => 'text',
    ),
    array('name'               => 'oxidized.features.versioning',
          'descr'              => 'Enable config versioning access',
          'type'               => 'checkbox',
    ),
);

$unixagent_conf = array(
    array('name'               => 'unix-agent.port',
          'descr'              => 'Default unix-agent port',
          'type'               => 'text',
    ),
    array('name'               => 'unix-agent.connection-timeout',
          'descr'              => 'Connection timeout',
          'type'               => 'text',
    ),
    array('name'               => 'unix-agent.read-timeout',
          'descr'              => 'Read timeout',
          'type'               => 'text',
    ),
);

echo '
<div class="panel-group" id="accordion">
    <form class="form-horizontal" role="form" action="" method="post">
';

echo generate_dynamic_config_panel('Oxidized integration',true,$config_groups,$oxidized_conf);
echo generate_dynamic_config_panel('Unix-agent integration',true,$config_groups,$unixagent_conf);

echo '
    </form>
</div>
';
