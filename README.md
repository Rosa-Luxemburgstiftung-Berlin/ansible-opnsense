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
    sudo pip3 install lxml
    sudo apt install secure-delete
    
Example Playbook
----------------

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    ---
    - hosts: firewalls
      gather_facts: false
      become: false
      roles:
        - ansible-opnsense
    ...

Become on play level is not needed for XML changes on localhost only for tasks to fetch/push config.xml and restart services on OPNsense.

Ansible command
---------------
    ansible-playbook -c paramiko firewalls.yml -l firewall1 -t user,fetch,copy,reload


Sample Playbook
---------------

https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-playbook

Other possible usefull ansible roles related to opnsense:

  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-facts
  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-checkmk


License
-------

Apache 2.0

Author Information
------------------

- Rudi Broekhuizen - rudi.broekhuizen@naturalis.nl
- Privazio - hello@privaz.io - https://github.com/privazio
- Foppe Pieters - foppe.pieters@naturalis.nl
- Klaus Zerwes - https://github.com/zerwes

