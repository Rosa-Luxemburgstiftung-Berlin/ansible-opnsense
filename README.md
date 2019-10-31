ansible-opnsense
=========

Ansible role to configure OPNsense firewalls

Requirements
------------

* OPNsense firewall with shell access

Role Variables
--------------

An example: https://github.com/naturalis/oss-network-demo/tree/master/ansible/basic

Dependencies
------------

    sudo pip install lxml
    
Example Playbook
----------------

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    ---
    - hosts: firewalls
      gather_facts: false
      become: true
      roles:
        - ansible-opnsense
    ...

Ansible command
---------------
    ansible-playbook -c paramiko firewalls.yml -l firewall1 -t user,fetch,copy,reload

License
-------

Apache 2.0

Author Information
------------------

Rudi Broekhuizen - rudi.broekhuizen@naturalis.nl
Privazio - hello@privaz.io - https://github.com/privazio
Foppe Pieters - foppe.pieters@naturalis.nl
