[![ansible-lint](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/actions/workflows/lint.yml/badge.svg)](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/actions/workflows/lint.yml)
[![ansible test](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/actions/workflows/test.yml/badge.svg)](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/actions/workflows/test.yml)
![Ansible 12 read](https://img.shields.io/badge/ansible_12-ready-green?logo=ansible&labelColor=black)

# ansible-opnsense

Ansible role to configure [OPNsense](https://opnsense.org/) firewalls.

This is the [RLS](https://github.com/Rosa-Luxemburgstiftung-Berlin) detached fork of the original from https://github.com/naturalis/ansible-opnsense.

**As of Oct 5, 2023 this became the main repository, as the original was removed (see [#35](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/issues/35)).**  
We like to thank [@rudibroekhuizen](https://github.com/rudibroekhuizen) and all other contributors from [@naturalis](https://github.com/naturalis) for their greate work and we are happy to use their contributions as a base for further development.

## Supported Opnsense Versions

Generally we try to support the current production and the last (legacy) version of the business and community edition.

Currently these are:

 * 25.4
 * 25.1
 * 24.10
 * 24.7

## Supported Opnsense Features

The ansible role covers the following features / settings:

 * **fetch** fetch the xml config to local device
 * **ldapusersync** [see wiki article](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/wiki/ldapsync) 
 * **configd** create your own configd actions
 * **dnsserver** configure the DNS settings for the opnsense device
 * **dyndns** configure dyndns
 * **user** configure users for the opnsense device
 * **group** configure groups and membership
 * **general** configure general settings like hostname, WebGUI settings, etc.
 * **sysctl** configure sysctl tunables
 * **authservers** configure authentication servers like LDAP, Active Directory, radius, ...
 * **ca** configure trust settings (ca, certificates, ...)
 * **openvpn** configure openvpn service (instance and legacy server supported)
 * **ipsec** configure IPsec service (connections and legacy tunnel supported)
 * **wireguard** configure wireguard service
 * **laggs** configure link aggregation / bonding
 * **vlans** configure VLANs
 * **interfaces** configure interfaces
 * **bridges** configure bridges
 * **virtualip** configure virtual IPs
 * **alias** configure aliases
 * **filter** configure firewall filter rules
 * **nat** configure NAT rules
 * **gateways** configure gateways
 * **staticroutes** configure routes
 * **hasync** configure HA settings
 * **dhcpd** configure ISC DHCP server
 * **unbound** configure unbound DNS server
 * **syslog** configure syslog settings
 * **monit** configure monit
 * **haproxy** configure haproxy
 * **cron** configure cron jobs
 * **nut** configure nut UPS
 * **zabbix** configure zabbix agent

## Requirements

* OPNsense firewall with shell access
* python lxml
* some tasks require [role ansible-opnsense-facts](https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-facts)

## Role Variables

We try to provide some example variable definitions in the corresponding task and test (`test/*.yml`) files.


## Dependencies

    sudo apt install python3-lxml

or

    pip install lxml


### optional

    sudo apt install secure-delete php-cli php-xml ldb-tools samba-dsdb-modules python3-passlib # (optional)

`php-cli` and `php-xml` are required for the xml re-encoding (recommended! set `opn_fix_xml_encoding: true`)

`ldb-tools`, `samba-dsdb-modules` and `python3-passlib` are required for syncing users from Active Directory / LDAP
(set `opn_sync_users_from_ldap: true` and configure the required VARs `opn_sync_users_ldap_*`)

`secure-delete` is required for safe deleting the local xml file.

## Example Playbook

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    ---
    - hosts: firewalls
      gather_facts: true
      become: false
      roles:
        - ansible-opnsense-facts  # optional - required for some tasks
        - ansible-opnsense
    ...

Become on play level is not needed for XML changes on localhost, only for tasks to fetch/push config.xml and restart services on OPNsense.

## Ansible command

    ansible-playbook -D firewalls.yml -l firewall1 -t user,fetch,copy,reload


## Related Links

### Sample Playbook

  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-playbook

### Other possible useful ansible roles related to opnsense

  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-facts
  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-checkmk
  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-plugpack
  * https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense-update
  * https://github.com/zerwes/opnsense-fail2ban


## License

Apache 2.0

## Author Information

  * Rudi Broekhuizen - rudi.broekhuizen@naturalis.nl
  * Privazio - hello@privaz.io - https://github.com/privazio
  * Foppe Pieters - foppe.pieters@naturalis.nl
  * Klaus Zerwes - https://github.com/zerwes
  * Jonybat - https://github.com/Jonybat
  * fnateghi - https://github.com/fnateghi

