ansible-opnsense
=========

Ansible role to configure OPNsense firewalls

Requirements
------------

* OPNsense firewall with shell access

Role Variables
--------------

A description of the settable variables for this role should go here, including any variables that are in defaults/main.yml, vars/main.yml, and any variables that can/should be set via parameters to the role. Any variables that are read from other roles and/or the global scope (ie. hostvars, group vars, etc.) should be mentioned here as well.

Dependencies
------------

* None

Example Playbook
----------------

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    - hosts: servers
      roles:
         - { role: username.rolename, x: 42 }

Ansible command
---------------
    ansible-playbook -c paramiko firewalls.yml -l firewall2 -t user,fetch,copy,reload

License
-------

Apache 2.0

Author Information
------------------

Rudi Broekhuizen - rudi.broekhuizen@naturalis.nl
