@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc-sns'))

<!DOCTYPE html>
<html lang="ja">

@extends('sns.snspost-' . (Agent::isMobile() ? 'phone' : 'pc'))

@extends('layouts.snsfooter')