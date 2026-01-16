#! /usr/bin/env python3

# field migration table:
# openvpn/openvpn-server -> OpenVPN/Instances/Instance
#   vpnid -> vpnid
#   tls -> decode and add to OpenVPN/StaticKeys/StaticKey : uuid of the entry comes to OpenVPN/Instances/Instance/tls_key
#   strictusercn -> username_as_common_name
#   maxclients -> maxclients
