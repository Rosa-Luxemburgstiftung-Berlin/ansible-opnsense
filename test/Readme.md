# This is a simple test setup for the ansible-opnsense playbook

Due to the fact that there is no easy way to implement a generic available test env (like with molecule),
this is a simple attempt to implement some checks that can be run localy.

To enable a task check add the task to the task list in `test.yml`.

A check consists of:
  * a file for the variable definitions `{{ task }}-test{{ testname_or_number }}.yml`
  * a file for the initial xml to run agains `{{ task }}-test{{ testname_or_number }}.xml`
  * a file represendting the expected resulting xml `{{ task }}-test{{ testname_or_number }}-expect.xml`

## Run

`ansible-playbook test.yml`

## Notes

This is work in progress ...
